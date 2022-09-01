<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SocialLoginGoogleController;
use App\Http\Controllers\Auth\SocialLoginFacebookController;
 
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/google', [SocialLoginGoogleController::class, 'redirectToGoogle']);
Route::get('callback/google', [SocialLoginGoogleController::class, 'handleCallback']);

Route::get('auth/facebook', [SocialLoginFacebookController::class, 'redirectToFB']);
Route::get('callback/facebook', [SocialLoginFacebookController::class, 'handleCallback']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


