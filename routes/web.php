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
    return redirect('9999/1');
});

Route::group(['middleware' => ['MyConfig']], function () {
    Route::get('/{market}/{lang}', 'MainController@index')->name('home');
});
