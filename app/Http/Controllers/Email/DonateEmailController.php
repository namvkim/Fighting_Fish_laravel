<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Jobs\DonateEmail;
use App\Jobs\EmailContact;
use App\Jobs\SendEmail;

use App\Models\User;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonateEmailController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {

            $user = new User;
            $user->name = $request->name;						
            $user->email = 'None';
            $user->phone = 'None';
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

