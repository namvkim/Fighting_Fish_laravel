<?php

use App\Http\Controllers\AipPartner;
use App\Http\Controllers\ApiAchievement;
use App\Http\Controllers\ApiAdmin;
use App\Http\Controllers\ApiBanner;
use App\Http\Controllers\ApiContact;
use App\Http\Controllers\ApiDonation;
use App\Http\Controllers\ApiEvent;
use App\Http\Controllers\ApiGallery;
use App\Http\Controllers\ApiGalleryType;
use App\Http\Controllers\ApiNews;
use App\Http\Controllers\ApiNewsComment;
use App\Http\Controllers\ApiNewsType;
use App\Http\Controllers\ApiStaff;
use App\Http\Controllers\ApiStaffType;
use App\Http\Controllers\ApiUser;
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
Route::resource('apigallerytype', ApiGalleryType::class);
Route::resource('apigallery', ApiGallery::class);
Route::resource('apiachievement', ApiAchievement::class);
