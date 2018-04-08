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
Auth::routes();
Route::get('/', function () {
    return view('granat');
});

Route::get('/admin', function () {
    return view('admindashboard');
});


Route::group(['middleware' => 'auth'], function(){ });

Route::group(['prefix'=>'admin'], function() {

    // Login Routes...
        Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminAuth\LoginController@showLoginForm']);
        Route::post('login', ['uses' => 'AdminAuth\LoginController@login']);
        Route::post('logout', ['as' => 'admin.logout', 'uses' => 'AdminAuth\LoginController@logout']);
    
    // Registration Routes...
        Route::get('register', ['as' => 'admin.register', 'uses' => 'AdminAuth\RegisterController@showRegistrationForm']);
        Route::post('register', ['uses' => 'AdminAuth\RegisterController@register']);
    
    // Password Reset Routes...
        Route::get('password/reset', ['as' => 'admin.password.reset', 'uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);
        Route::post('password/email', ['as' => 'admin.password.email', 'uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
        Route::get('password/reset/{token}', ['as' => 'admin.password.reset.token', 'uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
        Route::post('password/reset', ['uses' => 'AdminAuth\ResetPasswordController@reset']);
    });

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/admin','admindashboard')->middleware('auth:admin');

