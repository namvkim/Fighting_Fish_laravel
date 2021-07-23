<?php

use App\Http\Controllers\Api\AipPartner;
use App\Http\Controllers\Api\ApiAchievement;
use App\Http\Controllers\Api\ApiAdmin;
use App\Http\Controllers\Api\ApiAdminLogin;
use App\Http\Controllers\Api\ApiBanner;
use App\Http\Controllers\Api\ApiClass;
use App\Http\Controllers\Api\ApiContact;
use App\Http\Controllers\Api\ApiDonation;
use App\Http\Controllers\Api\ApiEvent;
use App\Http\Controllers\Api\ApiGallery;
use App\Http\Controllers\Api\ApiGalleryType;
use App\Http\Controllers\Api\ApiNews;
use App\Http\Controllers\Api\ApiNewsComment;
use App\Http\Controllers\Api\ApiNewsType;
use App\Http\Controllers\Api\ApiStaff;
use App\Http\Controllers\Api\ApiStaffType;
use App\Http\Controllers\Api\ApiUser;
use App\Http\Controllers\Payment\PaymentController;
use Illuminate\Support\Facades\Route;

Route::resource('admin', ApiAdmin::class);
Route::resource('event', ApiEvent::class);
Route::resource('donation', ApiDonation::class);
Route::resource('newsComment', ApiNewsComment::class);
Route::resource('stafftype', ApiStaffType::class);
Route::resource('staff', ApiStaff::class);
Route::resource('user', ApiUser::class);
Route::resource('banner', ApiBanner::class);
Route::resource('news_type', ApiNewsType::class);
Route::resource('partner', AipPartner::class);
Route::resource('news', ApiNews::class);
Route::resource('contact', ApiContact::class);
Route::resource('gallerytype', ApiGalleryType::class);
Route::resource('gallery', ApiGallery::class);
Route::resource('achievement', ApiAchievement::class);
Route::resource('class', ApiClass::class);
Route::resource('adminlogin', ApiAdminLogin::class);

Route::get('/vnpay_return', [PaymentController::class, 'vnpayReturn']);
Route::post('/vnPay', [PaymentController::class, 'createPayment']);
