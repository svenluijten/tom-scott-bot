<?php

Route::get('/', 'PagesController@home');
Route::get('support', 'PagesController@support');
Route::get('privacy', 'PagesController@privacy');
Route::get('auth', 'AuthController');
