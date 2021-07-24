<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News_comments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApiNewsComment extends Controller
{
    public function index()
    {
        $newsComments = DB::table('news_comments')
            ->join('users', 'news_comments.users_id', '=', 'users.id')
            ->select('news_comments.news_id', 'news_comments.users_id', 'news_comments.content', 'users.email')
            ->get();
        return response()->json($newsComments);
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = 'N/A';
        $user->email = $request->email;
        $user->phone = 'N/A';
        $user->vnp_TxnRef = 'N/A';
        $user->address = 'N/A';
        $user->save();

        $newsComment = new News_comments();
        $newsComment->news_id = $request->news_id;
        $newsComment->users_id = $user->id;
        $newsComment->content = $request->content;
        $newsComment->save();

        $newsComments = DB::table('news_comments')
            ->join('users', 'news_comments.users_id', '=', 'users.id')
            ->select('news_comments.news_id', 'news_comments.users_id', 'news_comments.content', 'users.email')
            ->get();

        return $newsComments;
    }

    public function show($id)
    {
        $newsComment = News_comments::findOrFail($id);
        return response()->json($newsComment);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'news_id' => 'required',
            'users_id' => 'required',
            'content' => 'required',
        ], [
            'news_id.required' => 'Please enter news_id',
            'users_id.required' => 'Please enter users_id',
            'content.required' => 'Please enter content',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->getMessageBag(),
                'status' => 0,
            ]);
        } else {

            $newsComment = News_comments::findOrFail($id);
            $newsComment->news_id = $request->news_id;
            $newsComment->users_id = $request->users_id;
            $newsComment->content = $request->content;
            $newsComment->save();

            $newsComments = News_comments::all();
            return response()->json([
                'results' => $newsComments,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $newsComment = News_comments::findOrFail($id);
        $newsComment->delete();

        $newsComments = News_comments::all();
        return response()->json($newsComments);
    }
}
