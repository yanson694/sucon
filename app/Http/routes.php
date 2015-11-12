<?php

# Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

# Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

#File Management
Route::post('courses/upload', 'DataController@store');
Route::get('download/{id}', 'DataController@download');
Route::get('data/delete/{id}', 'DataController@destroy');

# Courses
Route::resource('courses', 'CoursesController');
Route::get('courses/{param}', 'CoursesController@showParam');

# Comments
Route::resource('comments', 'CommentsController');
Route::get('comments/delete/{id}', 'CommentsController@destroy');

# Snippets
Route::get('/snippets', 'SnippetsController@index');


# temporary helper routes
//TODO set redirectPath in AuthController
Route::get('/home', function() {
    return redirect('/courses');
});

Route::get('/', function() {
    return view('pages.index');
});