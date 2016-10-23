<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'FrontendController@index');

Route::get('/read/{id}/{slug}', 'FrontendController@detail');

// halaman admin
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('news', 'NewsController');
    Route::resource('category', 'CategoryController');
});
