<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApiEvent extends Controller
{
    public function index()
    {
        $events = DB::table('events')
            ->orderBy('events.updated_at', 'DESC')
            ->get();
        return response()->json($events);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'img' => 'required',
            'content' => 'required',
        ], [
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

            $event = new Event();
            $event->title = $request->title;
            $event->img = $request->img;
            $event->content = $request->content;
            $event->time = $request->time;
            $event->save();

            $events = DB::table('events')
                ->orderBy('events.updated_at', 'DESC')
                ->get();
            return response()->json([
                'results' => $events,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'img' => 'required',
            'content' => 'required',
        ], [
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

            $event = Event::findOrFail($id);
            $event->title = $request->title;
            $event->img = $request->img;
            $event->content = $request->content;
            $event->time = $request->time;
            $event->save();

            $events = DB::table('events')
                ->orderBy('events.updated_at', 'DESC')
                ->get();
            return response()->json([
                'results' => $events,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        $events = DB::table('events')
            ->orderBy('events.updated_at', 'DESC')
            ->get();
        return response()->json($events);
    }
}
