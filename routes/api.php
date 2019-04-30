<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles','ArticlesController@index');
Route::get('articles/{id}','ArticlesController@show');
Route::post('articles','ArticlesController@store');
Route::put('articles','ArticlesController@store');
Route::delete('articles','ArticlesController@destroy');
