<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiDonation extends Controller
{
    public function index()
    {
        $donations = Donation::all();
        return response()->json($donations);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'users_id' => 'required',
            'money' => 'required',
            'message' => 'required',
        ], [
            'users_id.required' => 'Please enter users_id',
            'money.required' => 'Please enter money',
            'message.required' => 'Please enter message',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->getMessageBag(),
                'status' => 0,
            ]);
        } else {
            // $file = $request->file('img');
            // $name_img = time() . '_' . $file->getClientOriginalName();
            // $file->move(public_path('images'), $name_img);

            $donation = new Donation();
            $donation->users_id = $request->users_id;
            $donation->money = $request->money;
            $donation->message = $request->message;
            $donation->save();

            $donations = Donation::all();
            return response()->json([
                'results' => $donations,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $donation = Donation::findOrFail($id);
        return response()->json($donation);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'users_id' => 'required',
            'money' => 'required',
            'message' => 'required',
        ], [
            'users_id.required' => 'Please enter users_id',
            'money.required' => 'Please enter money',
            'message.required' => 'Please enter message',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->getMessageBag(),
                'status' => 0,
            ]);
        } else {
            // $file = $request->file('img');
            // $name_img = time() . '_' . $file->getClientOriginalName();
            // $file->move(public_path('images'), $name_img);

            $donation = Donation::findOrFail($id);
            $donation->users_id = $request->users_id;
            $donation->money = $request->money;
            $donation->message = $request->message;
            $donation->save();

            $donations = Donation::all();
            return response()->json([
                'results' => $donations,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();

        $donations = Donation::all();
        return response()->json($donations);
    }
}
