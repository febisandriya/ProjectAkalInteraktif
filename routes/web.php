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

Route::get('/','ControllerView@index')->name('welcom');

Route::get('productdetail/{id}', 'HomeController@productdetail')->name('productdetail');
Route::get('detailproduct/{id}', 'ControllerView@detailproduct')->name('detailproduct');
Route::get('beli', 'HomeController@beli')->name('showbeli');


Route::get('index', 'ControllerView@index')->name('index');

Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'ControllerView@refreshCaptcha')->name('refresh_captcha');

Auth::routes();
Route::get('/regis','ControllerView@registerSuccess')->name('register-success');
Route::get('/register/{token}','Auth\RegisterController@activating')->name('activating-account');
Route::get('/home', 'HomeController@index')->name('home');
