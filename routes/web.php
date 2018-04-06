<?php

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
    return view('granat');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', function(){
        return view('home' );
    })->name('home');
    Route::get('/#', function(){
        return view('#');
    })->name('#');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
