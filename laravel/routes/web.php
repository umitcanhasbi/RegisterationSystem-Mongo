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
//routes for registeration system
Route::get('/', function () {
    return view('welcome');
});

Route::get('/departments', 'TestController@getDepartments');

Route::post('/addDepartment', 'TestController@addDepartment');

Route::post('/editDepartment/{id}', 'TestController@editDepartment');

Route::get('/deleteDepartment/{id}', 'TestController@deleteDepartment');

///Lesson yonlendiricileris

Route::get('/lessons', 'TestController@getLessons');

Route::post('/addLesson', 'TestController@addLesson');

Route::post('/editLesson/{id}', 'TestController@editLesson');

Route::get('/deleteLesson/{id}', 'TestController@deleteLesson');

Route::get('/numberDontLie/{id}', 'TestController@numberOfLessons');
