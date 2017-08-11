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

//The default welcome screen
Route::get('/', function () {
    return view('welcome');
});

Route::get('/marketmenu', function () {
    return view('marketmenu');
});
//This URL brings you to TestDB controller's index page for testing your DB connection settings.
Route::get('/testdb', 'TestDBController@index');