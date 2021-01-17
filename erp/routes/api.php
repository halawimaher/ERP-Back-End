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

/**
* admin login
 */
Route::post('/login', 'AuthController@login');
Route::post('/logout','AuthController@logout');
Route::resource('/teams', 'TeamsController');
Route::resource('/employees', 'EmployeeController');
Route::resource('/kpis', 'EmployeeKpis');
Route::resource('/projects', 'ProjectController');
Route::resource('/assign','EmployeeTeamProject');


Route::group(['middleware' => ['jwt.verify']], function() {


});

