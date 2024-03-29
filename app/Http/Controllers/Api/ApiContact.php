<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApiContact extends Controller
{
    public function index()
    {
        $contacts = DB::table('contacts')
            ->join('users', 'contacts.users_id', '=', 'users.id')
            ->select('contacts.id', 'users.name', 'users.email', 'contacts.title', 'contacts.message', 'contacts.created_at')
            ->orderBy('contacts.created_at', 'DESC')
            ->get();

        return response()->json($contacts);

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'users_id' => 'required',
            'title' => 'required',
            'message' => 'required',

        ], [
            'users_id.required' => 'Please enter users ID',
            'title.required' => 'Please enter title',
            'message.required' => 'Please enter message',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->getMessageBag(),
                'status' => 0,
            ]);
        } else {

            $contact = new Contact();
            $contact->users_id = $request->users_id;
            $contact->title = $request->title;
            $contact->message = $request->message;
            $contact->save();

            $contacts = Contact::all();
            return response()->json([
                'results' => $contacts,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return response()->json($contact);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'users_id' => 'required',
            'title' => 'required',
            'message' => 'required',

        ], [
            'users_id.required' => 'Please enter users ID',
            'title.required' => 'Please enter title',
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

            $contact = Contact::findOrFail($id);
            $contact->users_id = $request->users_id;
            $contact->title = $request->title;
            $contact->message = $request->message;
            $contact->save();

            $contacts = Contact::all();
            return response()->json([
                'results' => $contacts,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        $contacts = DB::table('contacts')
            ->join('users', 'contacts.users_id', '=', 'users.id')
            ->select('contacts.id', 'users.name', 'users.email', 'users.phone', 'users.address', 'contacts.title', 'contacts.message')
            ->orderBy('contacts.created_at', 'DESC')
            ->get();

        return response()->json($contacts);
    }
}
