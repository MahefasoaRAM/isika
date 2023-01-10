<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\clientController;

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

Route::get('/', function(){ return view('front.home'); });
Route::get('/login', function(){ return view('front.login'); });
Route::get('/register', function(){ return view('front.register'); });
Route::get('/about', function(){ return view('front.about'); });
Route::get('/event', function(){ return view('front.event'); });
Route::get('/project', function(){ return view('front.project'); });
Route::get('/forgotpassword', function(){ return view('front.forgotpwd'); });
