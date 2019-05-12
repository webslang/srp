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
    return view('patron.create');
});



Route::get('/addsummergroup', function () {
    return view('summergroup.create');
});


Route::resource('patron','PatronController');
Auth::routes();

Route::resource('summergroup','SummerGroupController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




