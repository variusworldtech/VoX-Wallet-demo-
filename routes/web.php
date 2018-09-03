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
    return view('index');
});
Route::get('/deposit', function () {
    return view('deposit');
});
Route::get('/withdraw', function () {
    return view('withdraw');
});
Route::get('/send', function () {
    return view('send');
});
Route::get('/transactions', function () {
    return view('transactions');
});
Route::get('/settings', function () {
    return view('settings');
});
