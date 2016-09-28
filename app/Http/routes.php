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
Route::Auth();

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [
    'as' => 'dashboard',
    'uses' => 'HomeController@home'
]);

//Social Login
Route::get('social/{provider?}', 'SocialController@getSocialAuth');
Route::get('social/callback/{provider?}', 'SocialController@getSocialAuthCallback');

Route::group(['prefix' => 'dashboard'], function(){

    Route::get('/dashboard', [
        'as' => 'dashboard',
        'uses' => 'HomeController@home'
    ]);

    Route::get('/home', [
        'as' => 'home',
        'uses' => 'HomeController@home'
    ]);

    Route::resource('contact', 'ContactController');
});
