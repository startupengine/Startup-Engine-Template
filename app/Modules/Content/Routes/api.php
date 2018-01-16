<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your module. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('content/item/', 'App\Modules\Content\Http\Controllers\ContentAPIController@getItem');
Route::get('content/items/', 'App\Modules\Content\Http\Controllers\ContentAPIController@getItems');
