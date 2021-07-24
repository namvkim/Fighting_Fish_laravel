<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\EnrollEmail;
use App\Models\Enroll;
use Illuminate\Http\Request;

class ApiEnroll extends Controller
{
    public function index()
    {
        $enrolls = Enroll::all();
        return response()->json($enrolls);

    }
    public function store(Request $request)
    {

        $message = [
            'title' => 'Thank you for your application with us.',
            'name' => $request->name,
            'body' => 'We would like to inform you that we have received your application and our HR Dept is currently considering your application.',
            'conclusion' => ' Should your profile be suitable for the applied vacancy, PN will contact you by phone or email within 1 week.',
        ];
        EnrollEmail::dispatch($message, $request->email)->delay(now()->addMinute(1));

        $enroller = new Enroll();
        $enroller->name = $request->name;
        $enroller->img = $request->img;
        $enroller->phone = $request->phone;
        $enroller->school = $request->school;
        $enroller->email = $request->email;
        $enroller->address = $request->address;
        $enroller->circumstance = $request->circumstance; //hoàn cảnh gia đình(mồ côi, bố mẹ ly hôn)
        $enroller->save();

        return $request->email;
    }
    public function destroy($id)
    {
        $enroll = Enroll::findOrFail($id);
        $enroll->delete();

        $enrolls = Enroll::all();
        return response()->json($enrolls);
    }
}
