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
    Route::resource('category-main', 'CategoryController@getByPageMain');
    Route::resource('category-child/{id}', 'CategoryController@getByPageChild');
    Route::resource('menu', 'MenuController');
    Route::resource('merk', 'MerkController');
    Route::resource('product', 'ProductController');
    Route::resource('report', 'ReportController');
    Route::resource('review', 'ReviewController');
    Route::resource('type', 'TypeController');

});

    Route::get('/', [ 'as' => 'page.home' , 'uses' => 'PageController@index' ]);
    Route::get('/ads', [ 'as' => 'page.ads' , 'uses' => 'PageController@ads' ]);
    Route::get('/category', [ 'as' => 'page.category' , 'uses' => 'PageController@category' ]);
    Route::get('/menu', [ 'as' => 'page.menu' , 'uses' => 'PageController@menu' ]);
    Route::get('/merk', [ 'as' => 'page.merk' , 'uses' => 'PageController@merk' ]);
    Route::get('/product', [ 'as' => 'page.product' , 'uses' => 'PageController@product' ]);
    Route::get('/report', [ 'as' => 'page.report' , 'uses' => 'PageController@report' ]);
    Route::get('/review', [ 'as' => 'page.review' , 'uses' => 'PageController@review' ]);
    Route::get('/type', [ 'as' => 'page.type' , 'uses' => 'PageController@type' ]);
