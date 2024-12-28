<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('index', function () {
//     return view('index');
// });

Route::resource('product',ProductController::class);

Route::resource('gallery',GalleryController::class);

Route::get('product1',[ProductController::class,'create']);

Route::get('home',[ProductController::class,'view']);

Route::get('gallery1',[GalleryController::class,'view']);

Route::get('product_details1/{id}',[ProductController::class,'view1']);

Route::get('aboutus',[ProductController::class,'about']);

Route::get('contactus',[ContactController::class,'contact']);

Route::get('feedback1',[FeedbackController::class,'feedback']);

Route::get('enquiry1',[EnquiryController::class,'enquiry']);

Route::resource('contact1',ContactController::class);
Route::get('index',[ContactController::class,'dashboard']);
Route::resource('feed',FeedbackController::class);

Route::resource('enqu',EnquiryController::class);

Route::resource('upload',ImageController::class);