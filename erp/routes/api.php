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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/employee', 'EmployeeController@index');
Route::post('/employees', 'EmployeeController@store');


Route::resource('/employees', 'EmployeeController');


Route::get('/employees', 'EmployeeController@update');
Route::get('/employees', 'EmployeeController@destroy');
