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

Route::group(['middleware' => ['web']], function () {
    Route::get('/help', 'HelpController@index');
    Route::get('/help/{slug}', 'HelpController@getPage');
    Route::get('/help/test', 'HelpController@test');
});