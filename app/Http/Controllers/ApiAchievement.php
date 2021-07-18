<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Achievement;

class ApiAchievement extends Controller
{
    //
    
    public function index()
    {
        $achivements = Achievement::all();
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
            // $file = $request->file('img');
            // $name_img = time() . '_' . $file->getClientOriginalName();
            // $file->move(public_path('images'), $name_img);
            // $achivements = Achivements::all();

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

            $achivements = Achievement::all();
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
        $validator = Validator::make($request->all(),  [
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
            // $file = $request->file('img');
            // $name_img = time() . '_' . $file->getClientOriginalName();
            // $file->move(public_path('images'), $name_img);

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

            $achivements = Achievement::all();

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

        $achivements = Achievement::all();
        return response()->json($achivements);
    }
}
