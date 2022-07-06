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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/students_list', 'StudentController@index')->name('students');
Route::get('/students/add', 'StudentController@add')->name('students/add');
Route::post('/addStudent', 'StudentController@addStudent')->name('addStudent');
Route::get('/students/edit/{id}', 'StudentController@edit')->name('students/edit');
Route::get('/students/view/{id}','StudentController@view')->name('students/view');

Route::post('/updateStudent', 'StudentController@updateStudent')->name('updateStudent');
Route::post('/viewStudent', 'StudentController@viewStudent')->name('viewStudent');
