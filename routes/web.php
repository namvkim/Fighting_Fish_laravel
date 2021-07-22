<?php

use App\Http\Controllers\Email\EmailController;
use Illuminate\Support\Facades\Route;

// Route::get('admin', function () {
//     return view('adminPage');
// });

// Route::resource('admin/user/visited', VisitedController::class);
Route::get('/email', function () {
    return view('mails.FormEmail');
});
Route::post('/sendEmail', [EmailController::class, 'store']);