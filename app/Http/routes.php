<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login_1', function () {
    return view('pages.employee_login');
});

Route::get('user/{id}', 'UserController@showProfile');
Route::get('alchemy', 'AlchemyController@showResult');

Route::get('newJob', 'JobController@getNewJob');
Route::post('addJob', 'JobController@addJob');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('user/{id}', 'UserController@showProfile');

    Route::get('/', function () {
        return view('pages.home');
    });

});
