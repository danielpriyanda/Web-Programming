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




Route::group(['middleware' => 'guest'],function(){

    Route::get('/', function () {
        return view('welcome');
    });

	Route::get('/login','PagesController@getStudentLogin');

	Route::get('/dosen/login','PagesController@getDosenLogin');

	Route::get('/register','PagesController@getStudentRegister');

	Route::post('/register','PagesController@postStudentRegister');

	Route::post('/login','PagesController@postStudentLogin');

	Route::post('/dosen/login','PagesController@postDosenLogin');

    Route::get('/lecture/all','PagesController@getAllLecture');
});

Route::group(['middleware' => 'web'],function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/lecture/image/{filename}','PagesController@getLectureImage');

    Route::get('/lecture/all','PagesController@getAllLecture');

	Route::get('/logout','PagesController@getStudentLogout');

	Route::get('/enroll/add/{id}', 'EnrollController@postAddEnroll');

	Route::get('/enroll/all','EnrollController@getAllEnroll');

	Route::get('/forum/all','ForumController@getAllForum');

	Route::get('/forum/get/{id}','ForumController@getDiscuss');

	Route::post('/forum/add/{id}', 'ForumController@getAddForum');

});