<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\BarangCRUDController;

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

Route::get('/refresh-captcha', [LoginController::class, 'refreshCaptcha'])->name('refreshcaptcha');


Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/postregister', [LoginController::class, 'postRegister'])->name('postregister');

Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/about',[])

Route::group(['middleware' => ['auth', 'checkrole:admin']], function () {
    Route::get('/barang', [BarangCRUDController::class, 'index'])->name('barang');
    Route::post('/barang/ubahStatus', [BarangCRUDController::class, 'ubahStatusPemesanan']);
    Route::get('/barang/viewOrder', [BarangCRUDController::class, 'viewOrder']);
    Route::resource('barang', BarangCRUDController::class);
    Route::post('delete-barang', [BarangCRUDController::class, 'destroy']);
});

Route::group(['middleware' => ['auth', 'checkroles:user']], function () {
    // Route::get('/myProfile', [UserController::class, 'index'])->name('myProfile');
    Route::resource('user', UserController::class);
});

Route::group(['middleware' => ['auth', 'checkroles:admin']], function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('index');
});

Route::get('/{id}', [HotelController::class, 'detailHotel'])->name('detailHotel');
