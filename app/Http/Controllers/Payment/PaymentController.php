<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Jobs\DonateEmail;
use App\Models\Donation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function createPayment(Request $request)
    {
        $vnp_TxnRef = date('YmdHis');

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->vnp_TxnRef = $vnp_TxnRef;
        $user->save();

        $vnp_OrderInfo = $request->order_desc;
        $vnp_Amount = $request->amount * 100;
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
            "vnp_ReturnUrl" => 'https://fightingfishpnv22laravel.herokuapp.com/api/vnpay_return',
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

        return $vnp_Url;
    }

    public function vnpayReturn(Request $request)
    {
        if ($request->vnp_ResponseCode == '00') {
            $user = DB::table('users')->where('vnp_TxnRef', $request->vnp_TxnRef)->first();

            $donation = new Donation();
            $donation->users_id = $user->id;
            $donation->money = $request->vnp_Amount / 100;
            $donation->message = $request->vnp_OrderInfo;
            $donation->save();

            $data = [
                'name' => $user->name,
                'title' => 'Thank you for your donation.',
                'money' => $donation->money,
                'body' => $donation->message,
                'conclusion' => 'Hope PN and you will have the opportunity to meet in the near future ♥️ ♥️ ♥️!',
            ];
            DonateEmail::dispatch($data, $user->email)->delay(now()->addMinute(1));
        }
        return redirect('https://fightingfishpnv22reactjs.herokuapp.com');
    }
}
