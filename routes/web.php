<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReportController;
//use App\Http\Controllers\notify;


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
Route::get('/admin/login',[UserController::class,'loginForm'])->name('admin.login');
Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/',[homeController::class,'home'])->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'dashboard']);
    
    Route::get('/guest/list',[GuestController::class,'list']);
    
    Route::get('/hotel/list',[HotelController::class,'list'])->name('hotel');
    Route::get('/hotel/list/form',[HotelController::class,'form'])->name('hotel.form');
    Route::post('/hotel/store',[HotelController::class,'store'])->name('hotel.store');
    
    Route::get('/room/list',[RoomController::class,'list'])->name('room.list');
    Route::get('/room/list/form',[RoomController::class,'form'])->name('roomlist.form');
    Route::post('/room/list/store',[RoomController::class,'store'])->name('roomlist.store');
    
    Route::get('/roomtype/list',[RoomtypeController::class,'list'])->name('roomtype.list');
    Route::get('/roomtype/list/form',[RoomtypeController::class,'form'])->name('roomtype.form');
    Route::post('/roomtype/list/store',[RoomtypeController::class,'store'])->name('roomtype.store');
    
    Route::get('/amenities/list',[AmenitiesController::class,'list']);
    Route::get('/amenities/list/form',[AmenitiesController::class,'form']);
    Route::post('/amenities/store',[AmenitiesController::class,'store'])->name('amenities.store');
    
    
    Route::get('/payment/list',[PaymentController::class,'list'])->name('payment.list');
    
    Route::get('/booking/list',[BookingController::class,'list'])->name('booking.list');
    
    Route::get('/report',[ReportController::class,'report']);


});


