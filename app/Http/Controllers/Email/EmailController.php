<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
            $email = $request->txtEmail;

            $user = new User;
            $user->name = 'None';						
            $user->email = $request->txtEmail;
            $user->phone = 'None';
            $user->address = 'None';
            $user->save();		
            $message = [
                'title' => 'Thank you for your subcribe with us.',
                'body' =>' When Passerelels numériques Vietnam has any key dates or activities, we will send invitation to you. If you are free, you can go to the PNV',
                'conclusion' => ' Hope PN and you will have the opportunity to meet in the near future ♥️ ♥️ ♥️!',
            ];
            SendEmail::dispatch($message, $email)->delay(now()->addMinute(1));
           

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

