<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReportController;


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

Route::get('/',[homeController::class,'home']);
Route::get('/dashboard',[DashboardController::class,'dashboard']);
Route::get('/guest/list',[GuestController::class,'list']);

Route::get('/hotel/list',[HotelController::class,'list'])->name('hotel');
Route::get('/hotel/list/form',[HotelController::class,'form'])->name('hotel.form');
Route::post('/hotel/store',[HotelController::class,'store'])->name('hotel.store');


Route::get('/room/list',[RoomController::class,'list']);
Route::post('/roomlist/store',[RoomController::class,'store'])->name('roomlist.store');
Route::get('/room/list/form',[RoomController::class,'a_form']);
Route::get('/room/type',[RoomController::class,'type']);
Route::get('/room/type/form',[RoomController::class,'t_form']);

Route::get('/amenities/list',[AmenitiesController::class,'list']);
Route::get('/amenities/list/form',[AmenitiesController::class,'form']);
Route::post('/amenities/store',[AmenitiesController::class,'store'])->name('amenities.store');


Route::get('/payment/list',[PaymentController::class,'list']);
Route::get('/booking/list',[BookingController::class,'list']);
Route::get('/report',[ReportController::class,'report']);


