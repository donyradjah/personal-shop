<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'api/v1'], function () {

    Route::resource('ads', 'AdsController');
    Route::resource('category', 'CategoryController');
    Route::resource('menu', 'MenuController');
    Route::resource('merk', 'MerkController');
    Route::resource('product', 'ProductController');
    Route::resource('report', 'ReportController');
    Route::resource('review', 'ReviewController');
    Route::resource('type', 'TypeController');

});

    Route::get('/', [ 'as' => 'page.home' , 'uses' => 'PageController@index' ]);
