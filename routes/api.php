<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Auth Routes
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');
Route::get('/authuser', 'AuthController@me');

//Posting Routes
Route::post('/postjob', 'PostingController@store');
Route::put('/updatejob/{id}', 'PostingController@updatejob');
Route::delete('/deletejob/{id}', 'PostingController@destroy');
Route::get('/jobs', 'PostingController@index');
Route::get('/job/{id}', 'PostingController@show');

//ApplyJobs Route
Route::post('/applyjob', 'ApplyJobController@store');

//Contactus Route
Route::post('/contactus', 'ContactusController@store');

//News Route
Route::post('/newsfeeds', 'ContactusController@news');

//Manager Route
Route::put('/updatemanager', 'ManagersController@update');

//Applicant Route
Route::put('/updatejob', 'ApplicantController@update');
