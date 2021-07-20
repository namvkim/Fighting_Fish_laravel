<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiNews extends Controller
{
    public function index()
    {
        $newsS = News::all();
        return response()->json($newsS);

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'news_type_id' => 'required',
            'title' => 'required',
            'shortContent' => 'required',
            'content' => 'required',
            'img' => 'required',
            'users_like' => 'required',

        ], [
            'news_type_id.required' => 'Please enter news type id',
            'title.required' => 'Please enter title',
            'shortContent.required' => 'Please enter short content',
            'content.required' => 'Please enter content',
            'img.required' => 'Please enter image',
            'users_like.required' => 'Please enter users like',

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

            $news = new News();
            $news->news_type_id = $request->news_type_id;
            $news->title = $request->title;
            $news->shortContent = $request->shortContent;
            $news->content = $request->content;
            $news->img = $request->img;
            $news->users_like = $request->users_like;
            $news->save();

            $newsS = News::all();
            return response()->json([
                'results' => $newsS,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return response()->json($news);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'news_type_id' => 'required',
            'title' => 'required',
            'shortContent' => 'required',
            'content' => 'required',
            'img' => 'required',
            'users_like' => 'required',

        ], [
            'news_type_id.required' => 'Please enter news type id',
            'title.required' => 'Please enter title',
            'shortContent.required' => 'Please enter short content',
            'content.required' => 'Please enter content',
            'img.required' => 'Please enter image',
            'users_like.required' => 'Please enter users like',

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

            $news = News::findOrFail($id);
            $news->news_type_id = $request->news_type_id;
            $news->title = $request->title;
            $news->shortContent = $request->shortContent;
            $news->content = $request->content;
            $news->img = $request->img;
            $news->users_like = $request->users_like;
            $news->save();

            $newsS = News::all();
            return response()->json([
                'results' => $newsS,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        $newsS = News::all();
        return response()->json($newsS);
    }
}
