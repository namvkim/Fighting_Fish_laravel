<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Jobs\EnrollEmail;

use App\Models\Enroll;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EnrollEmailController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
         

            $enroller = new Enroll;
            $enroller->name = $request->name;						
            $enroller->phone = $request->phone;
            $enroller->school = $request->school;
            $enroller->email = $request->email;
            $enroller->address = $request->address;
            $enroller->circumstance = $request->circumstances;//hoàn cảnh gia đình(mồ côi, bố mẹ ly hôn)
            $enroller->save();		
            $message = [
                'title' => 'Thank you for your application with us.',
                'name' => $request->name,
                'body' =>'We would like to inform you that we have received your application and our HR Dept is currently considering your application.',
                'conclusion' => ' Should your profile be suitable for the applied vacancy, PN will contact you by phone or email within 1 week.',
            ];
            EnrollEmail::dispatch($message, $request->email)->delay(now()->addMinute(1));
           

        return redirect()->back();
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
       
    }

    public function destroy($id)
    {
        
    }

}

