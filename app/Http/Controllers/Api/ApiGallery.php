<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApiGallery extends Controller
{
    public function index()
    {
        $gallerys = DB::table('gallery')
            ->join('gallery_type', 'gallery_type.id', '=', 'gallery.gallery_type_id')
            ->select('gallery.id', 'gallery.title', 'gallery.img', 'gallery.subtitle', 'gallery.content', 'gallery_type.type', 'gallery.gallery_type_id')
            ->orderBy('gallery.created_at', 'DESC')
            ->get();

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

            $gallery = new Gallery();
            $gallery->gallery_type_id = $request->gallery_type_id;
            $gallery->title = $request->title;
            $gallery->img = $request->img;
            $gallery->subtitle = $request->subtitle;
            $gallery->content = $request->content;
            $gallery->save();

            $gallerys = DB::table('gallery')
                ->join('gallery_type', 'gallery_type.id', '=', 'gallery.gallery_type_id')
                ->select('gallery.id', 'gallery.title', 'gallery.img', 'gallery.subtitle', 'gallery.content', 'gallery_type.type')
                ->orderBy('gallery.created_at', 'DESC')
                ->get();

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
        } else {

            $gallery = Gallery::findOrFail($id);
            $gallery->gallery_type_id = $request->gallery_type_id;
            $gallery->title = $request->title;
            $gallery->img = $request->img;
            $gallery->subtitle = $request->subtitle;
            $gallery->content = $request->content;
            $gallery->save();

            $gallerys = DB::table('gallery')
                ->join('gallery_type', 'gallery_type.id', '=', 'gallery.gallery_type_id')
                ->select('gallery.id', 'gallery.title', 'gallery.img', 'gallery.subtitle', 'gallery.content', 'gallery_type.type', 'gallery.gallery_type_id')
                ->orderBy('gallery.created_at', 'DESC')
                ->get();

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

        $gallerys = DB::table('gallery')
            ->join('gallery_type', 'gallery_type.id', '=', 'gallery.gallery_type_id')
            ->select('gallery.id', 'gallery.title', 'gallery.img', 'gallery.subtitle', 'gallery.content', 'gallery_type.type')
            ->orderBy('gallery.created_at', 'DESC')
            ->get();

        return response()->json($gallerys);
    }
}
