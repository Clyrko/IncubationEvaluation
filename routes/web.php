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

// Route::get('survey', 'SurveyController@index')->name('survey.index');

Auth::routes();

Route::get('/survey', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index'); // Redirecting home to survey page
Route::post('/survey', 'SurveyController@store');
Route::get('/facilitator', 'FacilitatorSurveyController@index');
