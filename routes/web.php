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
Route::get('/', function(){
    return view("index");
});
Route::get('/news','PengumumanController@index');
Route::get('/news/{id}','PengumumanController@show')->name('detail.news');

Route::get('/admin/peserta', 'AdminController@peserta');

Route::get('auth.register', 'auth.RegisterController@showKabupatens');

Route::group(['middleware' => 'auth'], function(){ });

Route::group(['prefix'=>'admin'], function() {

    // Login Routes...
        Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminAuth\LoginController@showLoginForm']);
        Route::post('login', ['as' => 'admin.login.submit','uses' => 'AdminAuth\LoginController@login']);
        Route::get('logout', ['as' => 'admin.logout', 'uses' => 'AdminAuth\LoginController@logout']);

    
    // Registration Routes...
        //Route::get('register', ['as' => 'admin.register', 'uses' => 'AdminAuth\RegisterController@showRegistrationForm']);
        //Route::post('register', ['uses' => 'AdminAuth\RegisterController@register']);
    
    // Password Reset Routes...
        Route::get('password/reset', ['as' => 'admin.password.reset', 'uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);
        Route::post('password/email', ['as' => 'admin.password.email', 'uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
        Route::get('password/reset/{token}', ['as' => 'admin.password.reset.token', 'uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
        Route::post('password/reset', ['uses' => 'AdminAuth\ResetPasswordController@reset']);
        Route::get('/dashboard','AdminController@index')->name('admin.dashboard');

        Route::get('pengumuman', 'PengumumanController@create');
        Route::post('pengumuman', 'PengumumanController@store');
        Route::get('pengumuman/{id}/edit', 'PengumumanController@edit')->name('pengumuman.edit');
        Route::post('pengumuman/{id}', 'PengumumanController@update')->name('pengumuman.update');
        Route::delete('pengumuman/{id}', 'PengumumanController@destroy')->name('pengumuman.delete');
    });

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upload-berkas', 'HomeController@upload')->name('upload');
Route::post('/upload-berkas','HomeController@store');
Route::get('/profile', 'UserController@show')->name('profile');
Route::post('/profile','UserController@show');
Route::post('/profile/{id}','UserController@update')->name('editprofile');
Route::patch('admin/edit/{id}', 'AdminController@update')->name('confirm');
Route::post('admin/edit/{id}', 'AdminController@cancel')->name('cancel');
Route::get('/sejarah', function(){
    return view("sejarah");
});



Route::post('peserta', 'AdminController@anyData')->name('datatables.data');

