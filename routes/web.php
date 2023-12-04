<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\LoginController as FrontendLoginController;
use App\Http\Controllers\Frontend\RoomsController as FrontendRoomsController;
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
/*Webside */
Route::get('/',[FrontendHomeController::class,'home'])->name('home');
Route::get('/web/login',[FrontendLoginController::class,'login'])->name('website.login');
Route::get('/web/registration',[FrontendLoginController::class,'registration'])->name('website.registration');
Route::get('/web/roomview/{id}',[FrontendRoomsController::class,'view'])->name('website.roomview');
Route::get('/search',[FrontendHomeController::class,'search'])->name('website.search');



/*ADMIN PANNEL */
Route::group(['prefix'=>'admin'],function(){


Route::get('/login',[UserController::class,'loginForm'])->name('admin.login');
Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/logout',[UserController::class, 'logout'])->name('admin.logout');

   

    Route::get('/',[homeController::class,'home'])->name('dashboard');

    Route::get('/dashboard',[DashboardController::class,'dashboard']);
    
    //user
    Route::get('/user/list',[UserController::class, 'list'])->name('user.list');
    Route::get('/user/list/form',[UserController::class, 'form'])->name('user.form');
    Route::post('/user/list/store',[UserController::class, 'store'])->name('user.store');
    
    //Guest
    Route::get('/guest/list',[GuestController::class,'list']);
    
    //Hotel
    Route::get('/hotel/list',[HotelController::class,'list'])->name('hotel');
    Route::get('/hotel/list/form',[HotelController::class,'form'])->name('hotel.form');
    Route::post('/hotel/store',[HotelController::class,'store'])->name('hotel.store');
    
    //Room
    Route::get('/room/list',[RoomController::class,'list'])->name('room.list');
    Route::get('/room/list/form',[RoomController::class,'form'])->name('roomlist.form');
    Route::post('/room/list/store',[RoomController::class,'store'])->name('roomlist.store');
    
    //Room Type
    Route::get('/roomtype/list',[RoomtypeController::class,'list'])->name('roomtype.list');
    Route::get('/roomtype/list/form',[RoomtypeController::class,'form'])->name('roomtype.form');
    Route::post('/roomtype/list/store',[RoomtypeController::class,'store'])->name('roomtype.store');
    Route::get('/roomtype-edit/{id}',[RoomtypeController::class,'edit'])->name('roomtype.edit');
    Route::put('/roomtype-update/{id}',[RoomtypeController::class,'update'])->name('roomtype.update');
    Route::get('/roomtype-delete/{id}',[RoomtypeController::class,'delete'])->name('roomtype.delete');

    //Amenities
    Route::get('/amenities/list',[AmenitiesController::class,'list']);
    Route::get('/amenities/list/form',[AmenitiesController::class,'form']);
    Route::post('/amenities/store',[AmenitiesController::class,'store'])->name('amenities.store');
    
    //Payment
    Route::get('/payment/list',[PaymentController::class,'list'])->name('payment.list');

    //Booking List
    Route::get('/booking/list',[BookingController::class,'list'])->name('booking.list');

    //Report
    Route::get('/report',[ReportController::class,'report']);


});
});

