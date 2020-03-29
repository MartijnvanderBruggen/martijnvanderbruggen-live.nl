<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/logout', function () {
    return redirect('/')->with(Auth::logout());
});  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('showLogo', 'ImageController@showLogo')->name('showLogo');
