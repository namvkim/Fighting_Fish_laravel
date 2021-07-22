<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApiAchievement extends Controller
{

    public function index()
    {
        $achivements = DB::table('achievements')
            ->join('classes', 'achievements.classes_id', '=', 'classes.id')
            ->select('achievements.id', 'achievements.classes_id', 'achievements.authorName', 'achievements.topic', 'achievements.technology',
                'achievements.img', 'achievements.shortContent', 'achievements.content', 'achievements.link', 'classes.name')
            ->orderBy('achievements.created_at', 'DESC')
            ->get();
        return response()->json($achivements);

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'classes_id' => 'required',
            'authorName' => 'required',
            'topic' => 'required',
            'technology' => 'required',
            'img' => 'required',
            'shortContent' => 'required',
            'content' => 'required',
            'link' => 'required',
        ], [
            'classes_id.required' => 'Please enter classes_id',
            'authorName.required' => 'Please enter authorName',
            'topic.required' => 'Please enter topic',
            'technology.required' => 'Please enter technology',
            'img.required' => 'Please enter img',
            'shortContent.required' => 'Please enter shortContent',
            'content.required' => 'Please enter content',
            'link.required' => 'Please enter link',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->getMessageBag(),
                'status' => 0,
            ]);
        } else {

            $achivement = new Achievement();
            $achivement->classes_id = $request->classes_id;
            $achivement->authorName = $request->authorName;
            $achivement->topic = $request->topic;
            $achivement->technology = $request->technology;
            $achivement->img = $request->img;
            $achivement->shortContent = $request->shortContent;
            $achivement->content = $request->content;
            $achivement->link = $request->link;
            $achivement->save();

            $achivements = DB::table('achievements')
                ->join('classes', 'achievements.classes_id', '=', 'classes.id')
                ->select('achievements.id', 'achievements.classes_id', 'achievements.authorName', 'achievements.topic', 'achievements.technology',
                    'achievements.img', 'achievements.shortContent', 'achievements.content', 'achievements.link', 'classes.name')
                ->orderBy('achievements.created_at', 'DESC')
                ->get();
            return response()->json([
                'results' => $achivements,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $achivement = Achievement::findOrFail($id);
        return response()->json($achivement);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'classes_id' => 'required',
            'authorName' => 'required',
            'topic' => 'required',
            'technology' => 'required',
            'img' => 'required',
            'shortContent' => 'required',
            'content' => 'required',
            'link' => 'required',
        ], [
            'classes_id.required' => 'Please enter classes_id',
            'authorName.required' => 'Please enter authorName',
            'topic.required' => 'Please enter topic',
            'technology.required' => 'Please enter technology',
            'img.required' => 'Please enter img',
            'shortContent.required' => 'Please enter shortContent',
            'content.required' => 'Please enter content',
            'link.required' => 'Please enter link',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->getMessageBag(),
                'status' => 0,
            ]);
        } else {

            $achivement = Achievement::findOrFail($id);
            $achivement->classes_id = $request->classes_id;
            $achivement->authorName = $request->authorName;
            $achivement->topic = $request->topic;
            $achivement->technology = $request->technology;
            $achivement->img = $request->img;
            $achivement->shortContent = $request->shortContent;
            $achivement->content = $request->content;
            $achivement->link = $request->link;
            $achivement->save();

            $achivements = DB::table('achievements')
                ->join('classes', 'achievements.classes_id', '=', 'classes.id')
                ->select('achievements.id', 'achievements.classes_id', 'achievements.authorName', 'achievements.topic', 'achievements.technology',
                    'achievements.img', 'achievements.shortContent', 'achievements.content', 'achievements.link', 'classes.name')
                ->orderBy('achievements.created_at', 'DESC')
                ->get();

            return response()->json([
                'results' => $achivements,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $achivement = Achievement::findOrFail($id);
        $achivement->delete();

        $achivements = DB::table('achievements')
            ->join('classes', 'achievements.classes_id', '=', 'classes.id')
            ->select('achievements.id', 'achievements.classes_id', 'achievements.authorName', 'achievements.topic', 'achievements.technology',
                'achievements.img', 'achievements.shortContent', 'achievements.content', 'achievements.link', 'classes.name')
            ->orderBy('achievements.created_at', 'DESC')
            ->get();
        return response()->json($achivements);
    }
}
