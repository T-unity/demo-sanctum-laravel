<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/login', 'LoginController@login');
// Route::post('/logout', 'LoginController@logout');

// Route::post('/login', 'App\Http\Controllers\LoginController@login');
// Route::post('/logout', 'App\Http\Controllers\LoginController@logout');

Route::group(['middleware' => ['auth:sanctum']], function () {
  Route::post('/login_check', 'App\Http\Controllers\AuthCheckController@check');
});
