<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('posts', 'Api\PageController@index');
// Route::get('post', 'Api\PageController@show');

Route::namespace('Api')
        ->prefix('posts')
        ->group(function(){
            Route::get('/', 'PageController@index');
            Route::get('/{slug}', 'PageController@show');

        });
