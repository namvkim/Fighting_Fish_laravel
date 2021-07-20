<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiUser extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:11',
            'address' => 'required',

        ], [

            'name.required' => 'Please enter user name',
            'email.required' => 'Please enter content',
            'email.email' => 'Please enter form email',
            'phone.required' => 'Please enter phone',

            'address.required' => 'Please enter address',

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

            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;

            $user->save();

            $users = User::all();
            return response()->json([
                'results' => $users,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:11',
            'address' => 'required',

        ], [

            'name.required' => 'Please enter user name',
            'email.required' => 'Please enter content',
            'email.email' => 'Please enter form email',
            'phone.required' => 'Please enter phone',

            'address.required' => 'Please enter address',

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

            $user = User::findOrFail($id);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;

            $user->save();

            $users = User::all();
            return response()->json([
                'results' => $users,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        $users = User::all();
        return response()->json($users);
    }
}
