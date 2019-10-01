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

Route::get('/verify/2fa', 'Auth\TwoFactorController@index')->name('2fa.index');
Route::post('/verify/2fa', 'Auth\TwoFactorController@verifyToken')->name('2fa.verify');


/**
 * Client account dashboard
 */
Route::prefix('account')
    ->middleware(['auth', 'verified'])
    ->group(function(){

        Route::get('/', 'AccountController@index')->name('account.index');
        Route::get('/profile', 'AccountController@profile')->name('account.profile.index');
        Route::post('/profile', 'AccountController@profileUpdate')->name('account.profile.edit');


        Route::get('/corporate', 'AccountController@corporate')->name('account.corporate.index');
        Route::get('/corporate/application/aaaa', 'AccountController@corporateApplication')->name('account.corporate.application');

        Route::get('/address', 'AccountController@address')->name('account.address.index');
        Route::post('/address', 'AccountController@addressUpdate')->name('account.address.edit');
    });
