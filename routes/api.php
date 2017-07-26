<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// API V1
Route::group(['name' => 'v1', 'prefix' => 'v1', 'namespace' => 'V1\Controllers'], function() {
    // Articles
    Route::group(['prefix' => '/articles'], function() {
        Route::get('', ['as' => 'api.v1.articles.index', 'uses' => 'ArticlesController@index']);
        Route::get('/{id}', ['as' => 'api.v1.articles.show', 'uses' => 'ArticlesController@show']);
        Route::post('', ['as' => 'api.v1.articles.store', 'uses' => 'ArticlesController@store']);
        Route::put('/{id}', ['as' => 'api.v1.articles.update', 'uses' => 'ArticlesController@update']);
        Route::delete('/{id}', ['as' => 'api.v1.articles.destroy', 'uses' => 'ArticlesController@destroy']);
    });

    // Comments
    Route::group(['prefix' => '/comments'], function() {
        Route::get('', ['as' => 'api.v1.comments.index', 'uses' => 'CommentsController@index']);
        Route::get('/{id}', ['as' => 'api.v1.comments.show', 'uses' => 'CommentsController@show']);
        Route::post('', ['as' => 'api.v1.comments.store', 'uses' => 'CommentsController@store']);
        Route::put('/{id}', ['as' => 'api.v1.comments.update', 'uses' => 'CommentsController@update']);
        Route::delete('/{id}', ['as' => 'api.v1.comments.destroy', 'uses' => 'CommentsController@destroy']);
    });
});
