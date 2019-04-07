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
    return view('form');
});

//Route::get("personal", "formController@show");

Route::resource("admission","AdmissionController");
route::post("admission/pre","AdmissionController@preview");
// Route::get("login","")
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
