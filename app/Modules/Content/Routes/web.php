<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'content'], function () {
    Route::get('/{slug}', 'App\Modules\Content\Http\Controllers\ContentController@getItem');
    Route::get('/tag/{tag}', 'App\Modules\Content\Http\Controllers\ContentController@getItemsByTag');
});