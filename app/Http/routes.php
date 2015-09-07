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

// Route::get('/', 'WelcomeController@index');

Route::get('/', 'HomeController@index');

Route::get('auth/social/{source}', [
    'as'   => 'auth.social.redirect',
    'uses' => 'Auth\SocialController@redirect'
]);

Route::get('auth/social/callback/{source}', [
    'as'   => 'auth.social.callback',
    'uses' => 'Auth\SocialController@callback'
]);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('message', 'MessageController@index');
Route::post('message', 'MessageController@store');



