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

//Route::get('/', function () {
//    return view('welcome');
//});

/*
 * pages routes
 */
Route::get('/', 'PagesController@index')->name('home.index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify/2fa', 'Auth\TwoFactorController@index')->name('2fa.index');
Route::post('/verify/2fa', 'Auth\TwoFactorController@verifyToken')->name('2fa.verify');
