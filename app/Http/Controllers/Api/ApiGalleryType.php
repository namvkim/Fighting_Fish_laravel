<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gallery_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiGalleryType extends Controller
{

    public function index()
    {
        $gallery_types = Gallery_type::all();
        return response()->json($gallery_types);
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

            $gallery_type = new Gallery_type();
            $gallery_type->type = $request->type;
            $gallery_type->save();

            $gallery_types = Gallery_type::all();
            return response()->json([
                'results' => $gallery_types,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $gallery_type = Gallery_type::findOrFail($id);
        return response()->json($gallery_type);
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

            $gallery_type = Gallery_type::findOrFail($id);
            $gallery_type->type = $request->type;
            $gallery_type->save();

            $gallery_types = Gallery_type::all();
            return response()->json([
                'results' => $gallery_types,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $gallery_type = Gallery_type::findOrFail($id);
        $gallery_type->delete();

        $gallery_types = Gallery_type::all();
        return response()->json($gallery_types);
    }
}
