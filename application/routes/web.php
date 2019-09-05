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

Route::get('/login', 'Auth\LoginController@showAuthForm')->name('login');
Route::post('/auth', 'Auth\LoginController@authenticate');

Route::group(['middleware' => 'auth'], function(){

    Route::resource('companies', 'CompanyController')->except('show');
    Route::resource('employers', 'EmployerController')->except('show');

});
