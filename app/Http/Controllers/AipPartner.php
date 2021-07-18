<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\Validator;

class AipPartner extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return response()->json($partners);

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required',
            'img' => 'required',
            'content' => 'required',
            
        ], [
            'name.required' => 'Please enter name',
            'link.required' => 'Please enter link',
            'img.required' => 'Please enter image',
            'content.required' => 'Please enter content',
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

            $partner = new Partner();
            $partner->name = $request->name;
            $partner->link = $request->link;
            $partner->img = $request->img;
            $partner->content = $request->content;
            $partner->save();

            $partners = Partner::all();
            return response()->json([
                'results' => $partners,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $partner = Partner::findOrFail($id);
        return response()->json($partner);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required',
            'img' => 'required',
            'content' => 'required',

            
        ], [
            'name.required' => 'Please enter name',
            'link.required' => 'Please enter link',
            'img.required' => 'Please enter image',
            'content.required' => 'Please enter content',
            
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

            $partner = Partner::findOrFail($id);
            $partner->name = $request->name;
            $partner->link = $request->link;
            $partner->img = $request->img;
            $partner->content = $request->content;
            $partner->save();

            $partners = Partner::all();
            return response()->json([
                'results' => $partners,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();

        $partners = Partner::all();
        return response()->json($partners);
    }
}
