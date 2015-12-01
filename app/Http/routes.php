<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', 'BlogController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//Route::group(['middleware'=>'admin','prefix'=>'admin'],function(){
Route::group(['prefix'=>'admin'],function(){

    Route::get('index','AdminController@index');

    Route::resource('article','ArticleController');
});


Route::get('post/{id}','BlogController@post')->where(['id'=>'[0-9]+']);


Route::get('list/{id?}','BlogController@index')->where(['id'=>'[0-9]+']);
