<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

Route::group(['middleware' => ['auth', 'checkroles:user']], function () {
    // Route::get('/myProfile', [UserController::class, 'index'])->name('myProfile');
    Route::resource('barang', UserController::class);
});

Route::group(['middleware' => ['auth', 'checkroles:admin']], function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('index');
});
