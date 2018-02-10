<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'PagesController@home');
    Route::get('support', 'PagesController@support');
    Route::get('privacy', 'PagesController@privacy');
    Route::get('auth', 'AuthController');
});

Route::post('api/search', 'SearchController')->middleware('api');
