<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'PagesController@home');
    Route::get('auth', 'AuthController');
});

Route::post('api/search', 'SearchController')->middleware('api');
