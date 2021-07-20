<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Staff_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiStaffType extends Controller
{
    public function index()
    {
        $stafftypes = Staff_type::all();
        return response()->json($stafftypes);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'type' => 'required',

        ], [
            'type.required' => 'Please enter type',

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

            $stafftype = new Staff_type();
            $stafftype->type = $request->type;

            $stafftype->save();

            $stafftypes = Staff_type::all();
            return response()->json([
                'results' => $stafftypes,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $stafftype = Staff_type::findOrFail($id);
        return response()->json($stafftype);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'type' => 'required',

        ], [
            'type.required' => 'Please enter type',

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

            $stafftype = Staff_type::findOrFail($id);
            $stafftype->type = $request->type;

            $stafftype->save();

            $stafftypes = Staff_type::all();
            return response()->json([
                'results' => $stafftypes,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $stafftype = Staff_type::findOrFail($id);
        $stafftype->delete();

        $stafftypes = Staff_type::all();
        return response()->json($stafftypes);
    }
}
