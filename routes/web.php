<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\LoginController as FrontendLoginController;
use App\Http\Controllers\Frontend\RoomsController as FrontendRoomsController;
use App\Http\Controllers\Frontend\BookingController as FrontendBookingController;
use App\Http\Controllers\Frontend\AmenitiesController as FrontendAmenitiesController;
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
Route::get('/search',[FrontendHomeController::class,'search'])->name('website.search');

//room serch
Route::post('/room-search',[FrontendHomeController::class,'room_search'])->name('website.room.search');


//web login
Route::get('/web/login',[FrontendLoginController::class,'login'])->name('website.login');
Route::post('/web/login-form-post', [FrontendLoginController::class, 'loginPosts'])->name('web.login.post');



//registration
Route::get('/web/registration',[FrontendLoginController::class,'registration'])->name('website.registration');
Route::post('/web/user/registration',[FrontendLoginController::class,'user_registration'])->name('website.user.registration');

//single view room
Route::get('/web/roomview/{id}',[FrontendRoomsController::class,'view'])->name('website.roomview');

//single view roomlist
Route::get('/web/roomlistview/{id}',[FrontendRoomsController::class,'viewlist'])->name('website.roomlistview');

//single view amenities
Route::get('/web/amenitiesview/{id}',[FrontendAmenitiesController::class,'view'])->name('website.amenitiesview');


Route::group(['middlewere'=>'auth'],function(){

    //profile view
    Route::get('/web/profile/',[FrontendLoginController::class, 'profile'])->name('web.profile');
    Route::get('/profile/edit/form/{id}',[FrontendLoginController::class,'form'])->name('web.profile.form');
    Route::post('/profile-update/{id}',[FrontendLoginController::class,'update'])->name('web.profile.update');

    //booking
    Route::post('/web/booking/form',[FrontendBookingController::class, 'form'])->name('web.booking.form');

    Route::post('/web/booking/store',[FrontendBookingController::class, 'store'])->name('web.booking.store');

    Route::post('web/booking/room/store',[FrontendBookingController::class,'room_store'])->name('website.room.store');

    //web logout
    Route::get('/web/logout',[FrontendLoginController::class, 'web_logout'])->name('web.logout');

});



/*ADMIN PANNEL */
Route::group(['prefix'=>'admin'],function(){

//admin login
Route::get('/login',[UserController::class,'loginForm'])->name('admin.login');
Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware'=>'checkAdmin'],function (){

    
                        
    Route::get('/logout',[UserController::class, 'logout'])->name('admin.logout');

   

    Route::get('/',[homeController::class,'home'])->name('dashboard');

    


    //dashboard
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    
    //user
    Route::get('/user/list',[UserController::class, 'list'])->name('user.list');
    Route::get('/user/list/form',[UserController::class, 'form'])->name('user.form');
    Route::post('/user/list/store',[UserController::class, 'store'])->name('user.store');

    // profile
    Route::get('/profile/{user_id}',[UserController::class, 'profile'])->name('admin.profile');
    Route::get('/profile-edit/{id}',[UserController::class,'edit'])->name('profile.edit');
    Route::put('/profile-update/{id}',[UserController::class,'update'])->name('profile.update');
    Route::get('/profile-delete/{id}',[UserController::class,'delete'])->name('profile.delete');

   
    
    //Hotel
    Route::get('/hotel/list',[HotelController::class,'list'])->name('hotel');
    Route::get('/hotel/list/form',[HotelController::class,'form'])->name('hotel.form');
    Route::post('/hotel/store',[HotelController::class,'store'])->name('hotel.store');

    Route::get('/hotel-edit/{id}',[HotelController::class,'edit'])->name('hotel.edit');
    Route::post('/hotel-update/{id}',[HotelController::class,'update'])->name('hotel.update');
    Route::get('/hotel-delete/{id}',[HotelController::class,'delete'])->name('hotel.delete');

    //Room
    Route::get('/room/list',[RoomController::class,'list'])->name('room.list');
    Route::get('/room/list/form',[RoomController::class,'form'])->name('roomlist.form');
    Route::post('/room/list/store',[RoomController::class,'store'])->name('roomlist.store');
    Route::get('/room-edit/{id}',[RoomController::class,'edit'])->name('room.edit');
    Route::put('/room-update/{id}',[RoomController::class,'update'])->name('room.update');
    Route::get('/room-delete/{id}',[RoomController::class,'delete'])->name('room.delete');
    
    //Room Type
    Route::get('/roomtype/list',[RoomtypeController::class,'list'])->name('roomtype.list');
    Route::get('/roomtype/list/form',[RoomtypeController::class,'form'])->name('roomtype.form');
    Route::post('/roomtype/list/store',[RoomtypeController::class,'store'])->name('roomtype.store');
    Route::get('/roomtype-edit/{id}',[RoomtypeController::class,'edit'])->name('roomtype.edit');
    Route::put('/roomtype-update/{id}',[RoomtypeController::class,'update'])->name('roomtype.update');
    Route::get('/roomtype-delete/{id}',[RoomtypeController::class,'delete'])->name('roomtype.delete');

    //Amenities
    Route::get('/amenities/list',[AmenitiesController::class,'list'])->name('amenities.list');
    Route::get('/amenities/list/form',[AmenitiesController::class,'form'])->name('amenities.form');
    Route::post('/amenities/store',[AmenitiesController::class,'store'])->name('amenities.store');
    Route::get('/amenities-edit/{id}',[AmenitiesController::class,'edit'])->name('amenities.edit');
    Route::put('/amenities-update/{id}',[AmenitiesController::class,'update'])->name('amenities.update');
    Route::get('/amenities-delete/{id}',[AmenitiesController::class,'delete'])->name('amenities.delete');
    
    //Payment
    Route::get('/payment/list',[PaymentController::class,'list'])->name('payment.list');


    //Booking
    Route::get('/booking/list',[BookingController::class,'list'])->name('booking.list');

    

    //Report
    Route::get('/report',[ReportController::class,'report'])->name('report');


});
});
});
