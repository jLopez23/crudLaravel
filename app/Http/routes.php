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

Route::get('/', function () {
    return view('app');
});

Route::get('home', 'HomeController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
// Authentication routes manual...
Route::get('auth/login2', function () {
    return view('auth/login2');
});

Route::post('auth/login_post', 
    ['uses' => 'AuthController@authenticate',
     'as' => 'auth/login_post'
    ]);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

Route::post('create/rolpermission', ['as' => 'createRolPermission', 'uses' => 'Create\CreateController@createRolPermission']);

/*Users Consult*/
Route::get('users', ['as' => 'users', 'uses' => 'User\UserController@index']);

/*Users Create*/
Route::post('users', ['as' => '_users', 'uses' => 'User\UserController@store']);

/*Users Delete*/
Route::get('users/{id}', 'User\UserController@destroy');

/*Users Update*/
Route::post('_users/{id}', 'User\UserController@update');

