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
     return view('pages.employeeprofile');
 });

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
    Route::get('jobs/new', 'JobController@getNewJob');
    Route::get('jobs/search', 'HomeController@searchJob');
    Route::post('api/add_testimonial', 'UserController@addTestimonial');
    Route::post('api/add_job', 'JobController@addJob');
    Route::get('/', 'HomeController@show');
    Route::post('/requestJob', 'HomeController@requestJob');
    Route::post('/approveJob', 'HomeController@approveJob');
    Route::post('/declineJob', 'HomeController@declineJob');
    Route::get('/applicants', 'HomeController@getApplicants');
    Route::get('/getEmployeeJobOffers', 'HomeController@getEmployeeJobOffers');

    Route::get('/logout', function()
    {
        $user = Auth::user();
        $user->status = 'unavailable';
        $user->save();
        Auth::logout();

        return Redirect::to('/');
    });

 //    Route::get('/', function () {
	//     return view('pages.applicants');
	// });

});
