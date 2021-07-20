<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiAdmin extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return response()->json($admins);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'pass' => 'required|min:6',
        ], [
            'email.required' => 'Please enter email',
            'pass.required' => 'Please enter password',
            'pass.min' => 'Please enter a password greater than 6 characters',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->getMessageBag(),
                'status' => 0,
            ]);
        } else {

            $admin = new Admin();
            $admin->email = $request->email;
            $admin->pass = $request->pass;
            $admin->name = $request->name;
            $admin->phone = $request->phone;
            $admin->save();

            $admins = Admin::all();
            return response()->json([
                'results' => $admins,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return response()->json($admin);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'pass' => 'required|min:6',
        ], [
            'email.required' => 'Please enter email',
            'pass.required' => 'Please enter password',
            'pass.min' => 'Please enter a password greater than 6 characters',
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

            $admin = Admin::findOrFail($id);
            $admin->email = $request->email;
            $admin->pass = $request->pass;
            $admin->name = $request->name;
            $admin->phone = $request->phone;
            $admin->save();

            $admins = Admin::all();
            return response()->json([
                'results' => $admins,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        $admins = Admin::all();
        return response()->json($admins);
    }
}
