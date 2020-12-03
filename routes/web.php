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

Route::get('/login', 'AuthController@loginHome')->name('login');
Route::group(['middleware' => 'admin-auth'], function () {
    Route::get('/', 'AuthController@dashboard')->name('dashboard'); 
    Route::get('create-user', 'ClientcreateController@createuser')->name('create-user');
    Route::post('create-user-action', 'ClientcreateController@createuseraction')->name('create-user-action');
    Route::get('user-list', 'ClientcreateController@userlist')->name('user-list');
    
});
Route::post('post-register', 'AuthController@postRegister')->name('post-register'); 
Route::get('register', 'AuthController@register')->name('register');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::post('post-login', 'AuthController@postLogin')->name('post-login'); 