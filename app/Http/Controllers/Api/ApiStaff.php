<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiStaff extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return response()->json($staffs);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'staffs_type_id' => 'required',
            'name' => 'required',
            'content' => 'required',
            'facebook' => 'required',
            'linkin' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',

        ], [
            'staffs_type_id.required' => 'Please enter staff type id',
            'name.required' => 'Please enter staff name',
            'content.required' => 'Please enter content',
            'facebook.required' => 'Please enter facebook',
            'linkin.required' => 'Please enter linkin',
            'twitter.required' => 'Please enter twitter',
            'instagram.required' => 'Please enter instagram',

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

            $staff = new Staff();
            $staff->staffs_type_id = $request->staffs_type_id;
            $staff->name = $request->name;
            $staff->content = $request->content;
            $staff->facebook = $request->facebook;
            $staff->linkin = $request->linkin;
            $staff->twitter = $request->twitter;
            $staff->instagram = $request->instagram;
            $staff->save();

            $staffs = Staff::all();
            return response()->json([
                'results' => $staffs,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $staff = Staff::findOrFail($id);
        return response()->json($staff);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'staffs_type_id' => 'required',
            'name' => 'required',
            'content' => 'required',
            'facebook' => 'required',
            'linkin' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',

        ], [
            'staffs_type_id.required' => 'Please enter staff type id',
            'name.required' => 'Please enter staff name',
            'content.required' => 'Please enter content',
            'facebook.required' => 'Please enter facebook',
            'linkin.required' => 'Please enter linkin',
            'twitter.required' => 'Please enter twitter',
            'instagram.required' => 'Please enter instagram',

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

            $staff = Staff::findOrFail($id);
            $staff->staffs_type_id = $request->staffs_type_id;
            $staff->name = $request->name;
            $staff->content = $request->content;
            $staff->facebook = $request->facebook;
            $staff->linkin = $request->linkin;
            $staff->twitter = $request->twitter;
            $staff->instagram = $request->instagram;

            $staff->save();

            $staffs = Staff::all();
            return response()->json([
                'results' => $staffs,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        $staffs = Staff::all();
        return response()->json($staffs);
    }
}
