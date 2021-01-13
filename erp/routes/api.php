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
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout','AuthController@logout');

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::resource('/teams', 'TeamController');
    Route::resource('/employees', 'EmployeesController');
    Route::resource('/kpis', 'KpiController');
    Route::resource('/projects', 'ProjectController');
    Route::resource('/departments', 'DepartmentController');
    Route::resource('/managers', 'ManagerController');
    Route::resource('/roles', 'RolesController');

});
