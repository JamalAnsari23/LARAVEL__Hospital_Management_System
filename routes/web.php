<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SliderController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/aboutus',[HomeController::class,'about']);

Route::get('/doctorspage',[HomeController::class,'doctorspage']);

Route::get('/blog',[HomeController::class,'blog']);

Route::get('/contactus',[HomeController::class,'contact']);

Route::get('/blogdetails',[HomeController::class,'blogdetails']);

// Route::get('/appointmentdirect',[HomeController::class,'appointmentdirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


///slider
Route::get('/slider',[AdminController::class,'carousel']);


Route::POST('/store_slider',[AdminController::class,'store']);
Route::get('/showslider',[AdminController::class,'showslider']);
Route::get('/updateslider/{id}',[AdminController::class,'updateslider']);
Route::POST('/editslider/{id}',[AdminController::class,'editslider']);
Route::get('/deleteslider/{id}',[AdminController::class,'deleteslider']);
///slider




Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::POST('/upload_doctor',[AdminController::class,'upload']);

Route::POST('/appointment',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::POST('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::POST('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::POST('/contactus',[HomeController::class,'contactus']);              

Route::get('/showcontact',[AdminController::class,'showcontact']);

Route::get('/gallery',[HomeController::class,'gallery']);

// Route::get('/viewemail/{id}',[AdminController::class,'viewemail']);

// Route::POST('/emailsend/{id}',[AdminController::class,'emailsend']);


