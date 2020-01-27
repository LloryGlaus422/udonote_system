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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/display','UserController@info');

// Route::get('/register', 'UserController@create');
// Route::post('/register', 'UserController@store');

// Route::get('/getInformation/{id}', 'UserController@edit');
// Route::post('/editInformation/{id}', 'UserController@update');
// Route::get('/deleteInformation/{id}', 'UserController@delete');

Route::get('/subjects','SubjectsController@display');
// Route::get('/add','SubjectsController@addSubject');

Route::get('users/index', array('uses' => 'SubjectsController@addSubject', 'as' => 'users.index'));


