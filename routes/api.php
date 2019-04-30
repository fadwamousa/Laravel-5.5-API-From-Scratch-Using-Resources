<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles','ArticlesController@index');
Route::get('article/{id}','ArticlesController@show');
Route::post('article','ArticlesController@store');
Route::put('article','ArticlesController@store');
Route::delete('article/{id}','ArticlesController@destroy');
