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

Route::group(['prefix' => 'admin'], function() {
    Route::get('golf/create', 'Admin\GolfController@add')->middleware('auth');
    Route::post('golf/create', 'Admin\GolfController@create')->middleware('auth');
    Route::get('golf', 'Admin\GolfController@index')->middleware('auth');
    Route::get('golf/links', 'Admin\LinksController@add')->middleware('auth');
    Route::post('golf/links', 'Admin\LinksController@create')->middleware('auth');
    Route::get('golf/index', 'Admin\LinksController@index')->middleware('auth');
    Route::get('golf/score', 'Admin\ScoreController@add')->middleware('auth');
    Route::post('golf/score', 'Admin\ScoreController@create')->middleware('auth');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
