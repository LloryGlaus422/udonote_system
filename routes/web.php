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

// Route::get('/human', 'Human@human')->name('human');


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/welcome', 'UserController@welcome');
// Route::resource('/user','UserController@store');

// Route::get('/login', 'UserController@Login');

// Route::get('/register', 'UserController@Register');

// Route::post('/register', 'UserController@store');

Route::post('/insertData', 'Human@human2');

Route::get('/showTable','Human@human');

Route::get('/showForm','Human@show');

Route::get('/editForm/{id}','Human@edit');

Route::post('/edit/{id}','Human@update');

Route::get('/delete/{id}','Human@delete');

Route::get('/login','Human@login1');

Route::get('/logyow','Human@Log');

Route::get('/main','Human@main');



?>
