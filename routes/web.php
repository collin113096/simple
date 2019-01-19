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
Route::group(['namespace' => 'Enrollment','middleware' => 'auth'], function(){
	Route::resource('/student','StudentController');
	Route::resource('/father','FatherController');
	Route::resource('/mother','MotherController');
	Route::resource('/requirement','RequirementController');
});

Route::resource('/fee','FeeController');

Route::resource('/charge','ChargeController');
Route::resource('/payment','PaymentController');

