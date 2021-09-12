<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => 'admin'
], function ($router) {
   Route::post('persons','PersonController@index');
   Route::post('persons/store','PersonController@store');
   Route::post('persons/update','PersonController@update');
   Route::post('persons/state','PersonController@state');
});
