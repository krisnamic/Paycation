<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelCRUDController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');
Route::get('/', [LoginController::class, 'index'])->name('welcome');


//searching
Route::get('/redirect', [HotelController::class, 'redirect'])->name('back');
Route::get('/searching', [HotelController::class, 'search'])->name('searching');

Route::get('/refresh-captcha', [LoginController::class, 'refreshCaptcha'])->name('refreshcaptcha');


Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/postregister', [LoginController::class, 'postRegister'])->name('postregister');

Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/about',[])

Route::group(['middleware' => ['auth', 'checkroles:user']], function () {
    Route::resource('user', UserController::class);
    Route::get('/bookingform/{id}', [HotelController::class, 'bookingform'])->name('bookingform');
    Route::post('/booking', [HotelController::class, 'booking'])->name('booking');
    Route::post('/generatePDF', [HotelController::class, 'generatePDF'])->name('generatePDF');
    Route::get('/viewBookingDetail', [HotelController::class, 'viewBookingDetail'])->name('viewBookingDetail');
});

Route::group(['middleware' => ['auth', 'checkroles:admin']], function () {
    Route::get('/hotel', [HotelCRUDController::class, 'index'])->name('hotel');
    Route::resource('hotels', HotelCRUDController::class);
    Route::post('delete-hotel', [HotelCRUDController::class, 'destroy']);
});

Route::get('/{id}', [HotelController::class, 'detailHotel'])->name('detailHotel');
