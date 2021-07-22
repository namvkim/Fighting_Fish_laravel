<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function index()
    {
    

    }

    public function store(Request $request)
{
   
 $email = $request->txtEmail;
    $message = [
        'title' => 'Bạn đã subscribe website của chúng tôi ',
        'body' => 'Cảm ơn bạn rất nhiều',
    ];

   SendEmail::dispatch($message, $email)->delay(now()->addMinute(1));
   Session() -> flash('message', 'Send email successfully!');

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
