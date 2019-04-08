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
    return view("form");
});

//Route::get("personal", "formController@show");

Route::resource("admission","AdmissionController");
Route::resource("log","LogController");
route::post("log/login","LogController@login");
route::post("admission/pre","AdmissionController@preview");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

