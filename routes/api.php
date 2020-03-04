<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('testes', 'TesteController@store');
Route::get('testes', 'TesteController@index');


Route::post('users', 'Api\\UserController@store');
Route::post('auth/login', 'Api\\AuthController@login');

Route::group(['middleware' => 'apiJwt'], function () {
    Route::get('users', 'Api\\UserController@index');
});


