<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApiNewsType extends Controller
{
    public function index()
    {
        $news_types = DB::table('news_type')
            ->orderBy('news_type.updated_at', 'DESC')
            ->get();
        return response()->json($news_types);
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

            $news_type = new News_type();
            $news_type->type = $request->type;
            $news_type->save();

            $news_types = DB::table('news_type')
                ->orderBy('news_type.updated_at', 'DESC')
                ->get();
            return response()->json([
                'results' => $news_types,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $news_type = News_type::findOrFail($id);
        return response()->json($news_type);
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

            $news_type = News_type::findOrFail($id);
            $news_type->type = $request->type;
            $news_type->save();

            $news_types = DB::table('news_type')
                ->orderBy('news_type.updated_at', 'DESC')
                ->get();
            return response()->json([
                'results' => $news_types,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $news_type = News_type::findOrFail($id);
        $news_type->delete();

        $news_types = News_type::all();
        return response()->json($news_types);
    }
}
