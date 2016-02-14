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

Route::get('/a', function () {
    return view('pages.home');
});

Route::get('alchemy', 'AlchemyController@showResult');



Route::get('reg', function() {
    return view('pages.registerEmployer');
});

Route::get('regU', function() {
    return view('pages.registerUser');
});

Route::get('getJobsJson', 'JobController@getJobsJson');

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
    Route::get('user/{id}/add_testimonial', 'UserController@showAddTestimonial');
    Route::get('newJob', 'JobController@getNewJob');
    Route::post('addJob', 'JobController@addJob');
    Route::get('searchJobs', 'HomeController@searchJob');

    Route::post('api/add_testimonial', 'UserController@addTestimonial');
    Route::get('/', 'HomeController@show');

});
