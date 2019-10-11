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
    ->group(function(){

        Route::get('/', 'AccountController@index')->name('account.index');
        Route::get('/profile', 'AccountController@profile')->name('account.profile.index');
        Route::post('/profile', 'AccountController@profileUpdate')->name('account.profile.edit');

        Route::get('/corporate', 'AccountController@corporate')->name('account.corporate.index');
        Route::post('/corporate', 'AccountController@restaurantStore')->name('account.corporate.restaurant.store');
//        Route::post('/corporate', 'AccountController@charityStore')->name('account.corporate.charity.store');

        Route::get('/corporate/application/{id}', 'AccountController@corporateApplication')->name('account.corporate.application');
        Route::post('/corporate/application/{id}', 'AccountController@restaurantUpdate')->name('account.corporate.restaurant.update');

        Route::get('/address', 'AccountController@address')->name('account.address.index');
        Route::post('/address', 'AccountController@addressUpdate')->name('account.address.edit');
    });


/**
 * Admin account dashboard
 */
Route::namespace('Admin')
    ->prefix('admin')
    ->group(function(){


        // authentication
        Route::namespace('Auth')->group(function () {
            Route::get('/register', 'RegisterController@create')->name('admin.register');
            Route::post('/register', 'RegisterController@store')->name('admin.register.store');
            Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
            Route::post('/login', 'LoginController@login')->name('admin.login.enter');
            Route::post('/reset', 'LoginController@loginAgent')->name('admin.login.enter');
            Route::post('/logout', 'LoginController@logout')->name('admin.logout');

            Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
            Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
            Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('admin.password.reset');
            Route::post('/password/reset','ResetPasswordController@reset')->name('admin.password.update');

            Route::get('/verify/2fa', 'TwoFactorController@index')->name('admin.2fa.index');
            Route::post('/verify/2fa', 'TwoFactorController@verifyToken')->name('admin.2fa.verify');
        });

        // dashboard
        Route::middleware('auth:admin')->group(function () {
            Route::get('/', 'DashboardController@index')->name('admin.dashboard.index');
            Route::get('/profile', 'AccountController@profile')->name('admin.profile.index');
            Route::post('/profile', 'AccountController@profileUpdate')->name('admin.profile.edit');
        });

    });
