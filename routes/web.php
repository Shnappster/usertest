<?php

Route::auth();
Route::get('/logout', 'Auth\LoginController@destroy');

Route::get('/', 'WelcomeController@index')->name('home');
Route::get('/panel', 'WelcomeController@someAdminStuff');

Route::get('panel/manage-user', 'ManageUserController@index');
Route::get('panel/manage-user/create', 'ManageUserController@create');
Route::post('/users', 'ManageUserController@userAdd');
Route::get('/users/{user}', 'ManageUserController@edit');
Route::patch('/users/{user}/update', 'ManageUserController@update');
Route::delete('/users/{user}/delete', 'ManageUserController@userDelete');
