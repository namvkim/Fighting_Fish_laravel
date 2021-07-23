<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Jobs\EmailContact;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactEmailController extends Controller
{
    public function index()
    {
    }

    public function store(Request $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = 'None';
        $user->vnp_TxnRef = 'None';
        $user->address = 'None';
        $user->save();

        $contact = new Contact;
        $contact->users_id = $user->id;
        $contact->title = $request->title;
        $contact->message = $request->message;
        $contact->save();

        $data = [
            'name' => $request->name,
            'title' => $request->title,
            'body' => $request->message,
            'conclusion' => ' PN will respone to you soon ♥️ ♥️ ♥️!',
        ];
        EmailContact::dispatch($data, $request->email)->delay(now()->addMinute(1));

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
