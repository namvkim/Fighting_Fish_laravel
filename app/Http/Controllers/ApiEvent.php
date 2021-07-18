<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiEvent extends Controller
{
    public function index()
    {
        $events = Event::all();
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
            // $file = $request->file('img');
            // $name_img = time() . '_' . $file->getClientOriginalName();
            // $file->move(public_path('images'), $name_img);

            $event = new Event();
            $event->title = $request->title;
            $event->img = $request->img;
            $event->content = $request->content;
            $event->save();

            $events = Event::all();
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
            // $file = $request->file('img');
            // $name_img = time() . '_' . $file->getClientOriginalName();
            // $file->move(public_path('images'), $name_img);

            $event = Event::findOrFail($id);
            $event->title = $request->title;
            $event->img = $request->img;
            $event->content = $request->content;
            $event->save();

            $events = Event::all();
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

        $events = Event::all();
        return response()->json($events);
    }
}
