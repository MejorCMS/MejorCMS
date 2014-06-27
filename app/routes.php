<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




Route::get('backend/login', ['as'=>'getLogin',      'uses'=>'LoginController@getLogin']);
Route::post('backend/login',['as'=>'postRegister',  'uses'=>'LoginController@postLogin']);
/*
 * Rutas del administrador de MejorCMS 
 */
Route::group(array('prefix' => 'backend','before' => 'auth'), function(){
    Route::get('/', function()
    {
        return View::make('hello');
    });
    Route::get('logout',    ['as'=>'logout',        'uses'=>'LoginController@logout']);
    Route::get('register',  ['as'=>'getRegister',   'uses'=>'LoginController@getRegister']);
    Route::post('register', ['as'=>'postLogin',     'uses'=>'LoginController@postRegister']);
});