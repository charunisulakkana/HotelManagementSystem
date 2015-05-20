<?php


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//Route::get('/index', 'IndexPageController@showIndexPage');
Route::get('/main', 'MainPageController@showMainPage');
Route::get('/add', 'AddPageController@index');
Route::post('/add/create', 'AddPageController@create');

Route::get('/search', 'SearchPageController@index');
Route::post('/search/show', 'SearchPageController@show');


//UPDATE
Route::get('/update', 'UpdateController@index');
Route::get('/update/destroy/{update}',  'UpdateController@destroy');

