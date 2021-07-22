<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApiNews extends Controller
{
    public function index()
    {
        $newsS = DB::table('news')
            ->join('news_type', 'news_type.id', '=', 'news.news_type_id')
            ->select('news.id', 'news.news_type_id', 'news.title', 'news.shortContent', 'news.content', 'news.img', 'news.updated_at', 'news.users_like', 'news_type.type')
            ->orderBy('news.updated_at', 'DESC')
            ->get();
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
        ], [
            'news_type_id.required' => 'Please enter news type id',
            'title.required' => 'Please enter title',
            'shortContent.required' => 'Please enter short content',
            'content.required' => 'Please enter content',
            'img.required' => 'Please enter image',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->getMessageBag(),
                'status' => 0,
            ]);
        } else {

            $news = new News();
            $news->news_type_id = $request->news_type_id;
            $news->title = $request->title;
            $news->shortContent = $request->shortContent;
            $news->content = $request->content;
            $news->img = $request->img;
            $news->save();

            $news = DB::table('news')
                ->join('news_type', 'news_type.id', '=', 'news.news_type_id')
                ->select('news.id', 'news.news_type_id', 'news.title', 'news.shortContent', 'news.content', 'news.img', 'news.updated_at', 'news_type.type')
                ->orderBy('news.updated_at', 'DESC')
                ->get();
            return response()->json([
                'results' => $news,
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

        ], [
            'news_type_id.required' => 'Please enter news type id',
            'title.required' => 'Please enter title',
            'shortContent.required' => 'Please enter short content',
            'content.required' => 'Please enter content',
            'img.required' => 'Please enter image',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->getMessageBag(),
                'status' => 0,
            ]);
        } else {

            $news = News::findOrFail($id);
            $news->news_type_id = $request->news_type_id;
            $news->title = $request->title;
            $news->shortContent = $request->shortContent;
            $news->content = $request->content;
            $news->img = $request->img;
            $news->save();

            $newsS = DB::table('news')
                ->join('news_type', 'news_type.id', '=', 'news.news_type_id')
                ->select('news.id', 'news.news_type_id', 'news.title', 'news.shortContent', 'news.content', 'news.img', 'news.updated_at', 'news_type.type')
                ->orderBy('news.updated_at', 'DESC')
                ->get();
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
