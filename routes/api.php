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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students', 'ApiController@getAllStudents');
Route::get('student/{id}', 'ApiController@getStudent');
Route::post('student/create', 'ApiController@createStudent');
Route::put('student/update/{id}', 'ApiController@updateStudent');
Route::delete('student/delete/{id}', 'ApiController@deleteStudent');