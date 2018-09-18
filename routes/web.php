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
    return view('auth.login');
});

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/deposit', function () {
        return view('deposit');
    });

    Route::get('/depositByCard', function(){
        return view('depositByCard');
    });

    Route::post('/depositByCard', 'depositByCardController@depositBycard');

    Route::get('/withdraw', function () {
        return view('withdraw');
    });

    Route::get('/withdrawNoFunds', function () {
        return view('withdrawNoFunds');
    });

    Route::get('/send', function () {
        return view('send');
    });

    Route::get('/transactions', function () {
        return view('transactions');
    });

    Route::get('/card', function () {
        return view('card');
    });

    Route::post('/cardapplied', 'CardApplicationController@store');

    Route::get('/settings', function () {
        return view('settings');
    });
    Route::get('/profile', function () {
        return view('profile-timeline');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
