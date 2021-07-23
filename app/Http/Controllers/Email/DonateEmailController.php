<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Jobs\DonateEmail;
use App\Models\Donation;
use App\Models\User;
use Illuminate\Http\Request;

class DonateEmailController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->vnp_TxnRef = 'None';
        $user->address = 'None';
        $user->save();

        $donation = new Donation();
        $donation->users_id = $user->id;
        $donation->money = $request->money;
        $donation->message = $request->message;
        $donation->save();

        $data = [
            'name' => $request->name,
            'title' => 'Thank you for your donation.',
            'money' => $request->money,
            'body' => $request->message,
            'conclusion' => 'Hope PN and you will have the opportunity to meet in the near future ♥️ ♥️ ♥️!',
        ];
        DonateEmail::dispatch($data, $request->email)->delay(now()->addMinute(1));

        return redirect()->back();
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

}
