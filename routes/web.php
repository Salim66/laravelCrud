<?php

use Illuminate\Support\Facades\Route;

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


Route::get('student', 'StudentController@showForm');
Route::post('student-add', 'StudentController@insertStudent');
Route::get('student-all', 'StudentController@allStudent');
Route::get('student-single/{id}', 'StudentController@singleStudent');
Route::delete('student-delete/{id}', 'StudentController@deleteStudent');
Route::get('student-edit/{id}','StudentController@editStudent');
Route::patch('student-update/{id}', 'StudentController@updateStudent');
