<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Gallery;

class ApiGallery extends Controller
{
    //

    
    public function index()
    {
        $gallerys = Gallery::all();
        return response()->json($gallerys);

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gallery_type_id' => 'required',
            'title' => 'required',
            'img' => 'required',
            'content' => 'required',
        ], [
            'gallery_type_id.required' => 'Please enter gallery_type_id',
            'title.required' => 'Please enter title',
            'img.required' => 'Please enter img',
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

            $gallery = new Gallery();
            $gallery->gallery_type_id = $request->gallery_type_id;
            $gallery->title = $request->title;
            $gallery->img = $request->img;
            $gallery->content = $request->content;
            $gallery->save();

            $gallerys = Gallery::all();
            return response()->json([
                'results' => $gallerys,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return response()->json($gallery);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'gallery_type_id' => 'required',
            'title' => 'required',
            'img' => 'required',
            'content' => 'required',
        ], [
            'gallery_type_id.required' => 'Please enter gallery_type_id',
            'title.required' => 'Please enter title',
            'img.required' => 'Please enter img',
            'content.required' => 'Please enter content',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->getMessageBag(),
                'status' => 0,
            ]);
        }
        else {
            // $file = $request->file('img');
            // $name_img = time() . '_' . $file->getClientOriginalName();
            // $file->move(public_path('images'), $name_img);

            $gallery = Gallery::findOrFail($id);
            $gallery->gallery_type_id = $request->gallery_type_id;
            $gallery->title = $request->title;
            $gallery->img = $request->img;
            $gallery->content = $request->content;
            $gallery->save();

            $gallerys = Gallery::all();
            return response()->json([
                'results' => $gallerys,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        $gallerys = Gallery::all();
        return response()->json($gallerys);
    }
}
