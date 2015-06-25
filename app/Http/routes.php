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

/*Route::get('/', function () {
    return view('welcome');
});*/


// Authentication routes...
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('/', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');


Route::get('home', 'HomeController@index');

Route::resource('application', 'AppFormController',
    ['names' => [
        'index' => 'application',
        'create' => 'application_create',
        'store' => 'application_store',
        'show' => 'application_show',
        'edit' => 'application_edit',
        'update' => 'application_update',
        'destroy' => 'application_destroy',
        ]
    ]
);