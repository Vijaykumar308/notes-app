<?php

use App\Http\Controllers\Auth\AuthController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'guest'],function() {

    Route::view('/login','auth.login')->name('login');
    Route::view('/signup','auth.register')->name('singup');
    
    Route::post('/login', [AuthController::class,'login'])->name('login');
    Route::post('/signup',[AuthController::class,'register'])->name('singup');
    
});

Route::group(['middleware' => 'auth'],function() {
    Route::get('/', function () {
        return view('index');
    })->name('/');
    
    Route::view('/feeds','feeds')->name('feeds');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});



