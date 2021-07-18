<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiClass extends Controller
{
    public function index()
    {
        $classes = Classes::all();
        return response()->json($classes);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ], [

            'name.required' => 'Please enter name',
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

            $class = new Classes();
            $class->name = $request->name;
            $class->save();

            $classes = Classes::all();
            return response()->json([
                'results' => $classes,
                'status' => 200,
            ]);
        }
    }

    public function show($id)
    {
        $class = Classes::findOrFail($id);
        return response()->json($class);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ], [

            'name.required' => 'Please enter name',
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

            $class = Classes::findOrFail($id);

            $class->name = $request->name;
            $class->save();

            $classes = Classes::all();
            return response()->json([
                'results' => $classes,
                'status' => 200,
            ]);
        }
    }

    public function destroy($id)
    {
        $class = Classes::findOrFail($id);
        $class->delete();

        $classes = Classes::all();
        return response()->json($classes);
    }
}
