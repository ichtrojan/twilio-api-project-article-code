<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'api'], function () {
  Route::get('students', 'ApiController@getAllStudents');
  Route::get('student/{id}', 'ApiController@getStudent');
  Route::post('student/create', 'ApiController@createStudent');
  Route::put('student/update/{id}', 'ApiController@updateStudent');
  Route::delete('student/delete/{id}', 'ApiController@deleteStudent');
});
