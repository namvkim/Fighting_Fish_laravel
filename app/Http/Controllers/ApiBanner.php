<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiBanner extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return response()->json($banners);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'title' => 'required',
            'content' => 'required',
            'img' => 'required',
            'video' => 'required',
            'background' => 'required',

        ], [

            'title.required' => 'Please enter title',
            'content.required' => 'Please enter content',
            'img.required' => 'Please enter img',
            'video.required' => 'Please enter video',

            'background.required' => 'Please enter background',

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

            $banner = new Banner();

            $banner->title = $request->title;
            $banner->content = $request->content;
            $banner->img = $request->img;
            $banner->video = $request->video;
            $banner->background = $request->background;
            $banner->save();

            $banners = Banner::all();
            return response()->json([
                'results' => $banners,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $banner = Banner::findOrFail($id);
        return response()->json($banner);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [

            'title' => 'required',
            'content' => 'required',
            'img' => 'required',
            'video' => 'required',
            'background' => 'required',

        ], [

            'title.required' => 'Please enter title',
            'content.required' => 'Please enter content',
            'img.required' => 'Please enter img',
            'video.required' => 'Please enter video',
            'background.required' => 'Please enter background',

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

            $banner = Banner::findOrFail($id);

            $banner->title = $request->title;
            $banner->content = $request->content;
            $banner->img = $request->img;
            $banner->video = $request->video;
            $banner->background = $request->background;

            $banner->save();

            $banners = Banner::all();
            return response()->json([
                'results' => $banners,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        $banners = Banner::all();
        return response()->json($banners);
    }
}
