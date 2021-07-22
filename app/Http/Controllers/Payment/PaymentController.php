<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function createPayment(Request $request)
    {
        $cart = Session::get('cart');
        $vnp_TxnRef = $request->transaction_id; //Mã giao dịch. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $request->order_desc;
        $vnp_Amount = str_replace(',', '', $cart->totalPrice * 100);
        $vnp_Locale = $request->language;
        $vnp_BankCode = $request->bank_code;
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => env('VNP_TMNCODE'),
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_ReturnUrl" => route('vnpayReturn'),
            "vnp_TxnRef" => $vnp_TxnRef,
        );
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        $vnp_Url = env('VNP_URL') . "?" . $query;
        if (env('VNP_HASHSECRECT')) {
            $vnpSecureHash = hash('sha256', env('VNP_HASHSECRECT') .
                $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' .
                $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }

    public function vnpayReturn(Request $request)
    {
        if ($request->vnp_ResponseCode == '00') {
            $cart = Session::get('cart');

            //lay du lieu vnpay tra ve
            $vnpay_Data = $request->all();

            // insert du lieu don hang vao database
            $customer_s = Session::get('customer');
            $customer = new Customer();
            $customer->name = $customer_s->name;
            $customer->gender = $customer_s->gender;
            $customer->email = $customer_s->email;
            $customer->address = $customer_s->address;
            $customer->phone_number = $customer_s->phone_number;
            $customer->note = $customer_s->note;
            $customer->save();

            $bill_s = Session::get('bill');
            $bill = new Bill();
            $bill->id_customer = $customer->id;
            $bill->date_order = $bill_s->date_order;
            $bill->total = $bill_s->total;
            $bill->payment = $bill_s->payment;
            $bill->note = $bill_s->note;
            $bill->save();

            foreach ($cart->items as $key => $value) {
                $bill_detail = new BillDetail();
                $bill_detail->id_bill = $bill->id;
                $bill_detail->id_product = $key;
                $bill_detail->quantity = $value['qty'];
                $bill_detail->unit_price = $value['price'] / $value['qty'];
                $bill_detail->save();
            }

            Session::forget('cart');

            //insert du lieu vao bang payments
            $payment = new Payments();
            $payment->order_id = $bill->id;
            $payment->thanh_vien = $customer_s->name;
            $payment->money = $vnpay_Data['vnp_Amount'];
            $payment->note = $vnpay_Data['vnp_OrderInfo'];
            $payment->vnp_response_code = $vnpay_Data['vnp_ResponseCode'];
            $payment->code_vnpay = $vnpay_Data['vnp_TxnRef'];
            $payment->code_bank = $vnpay_Data['vnp_BankCode'];
            $payment->time = $vnpay_Data['vnp_PayDate'];
            $payment->save();

            //truyen inputData vao trang vnpay_return
            return view('admin.vnpay_return', compact('vnpay_Data'));
        }

}
