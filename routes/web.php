<?php

Route::get('/','AlumniController@index');
Route::get('/about','AlumniController@about');
Route::get('/story','AlumniController@story');
Route::get('/career','AlumniController@career');
Route::get('/members','AlumniController@members');
Route::get('/register','AlumniController@register');
Route::get('/login','AlumniController@login');
Route::get('/logout','AlumniController@logout');
Route::post('/login-check','AlumniController@login_check');
Route::get('/jobDetails/{id}','AlumniController@jobDetails');
Route::get('/programs-events','AlumniController@programsEvents');
Route::get('/eventDetails/{id}','AlumniController@eventDetails');
Route::get('/event-register/{id}','AlumniController@eventRegister');
Route::post('/member-store','AlumniController@memberStore');

Route::get('/admin','AdminController@index');

Route::get('/admin-login','AdminController@login');
Route::post('/admin/login-check','AdminController@loginCheck');

Route::get('/admin/logout','AdminController@logout');

Route::get('/admin/alumni-register','AdminController@alumniRegistration');
Route::get('/admin/executive-register','AdminController@executiveRegistration');

Route::post('/admin/alumni-store','AdminController@alumniStore');
Route::post('/admin/executive-store','AdminController@executiveStore');

Route::get('/admin/programs','AdminController@program');
Route::get('/admin/programs/list','AdminController@program_list');
Route::get('/admin/program-enroll/{id}','AdminController@enroll_list');
Route::post('/admin/programs-store','AdminController@programStore');

Route::get('/admin/job-post','AdminController@jobPost');
Route::post('/admin/job-store','AdminController@jobStore');

Route::get('/admin/slider','AdminController@slider');
Route::post('/admin/slider-store','AdminController@sliderStore');

Route::get('/admin/story','AdminController@story');
Route::post('/admin/story-store','AdminController@storyStore');

Route::get('/social','SocialController@index');

Route::get('/social/login','SocialController@login');
Route::post('/social/login-check','SocialController@logincheck');
Route::get('/social/logout','SocialController@logout');

Route::get('/social/profile/{id}','SocialController@profile');
Route::get('/social/about/{id}','SocialController@about');
Route::get('/social/edit/{id}','SocialController@edit');
Route::post('/social/update/{id}','SocialController@update');
Route::get('/social/profile/photos/{id}','SocialController@photos');
Route::post('/social/post','SocialController@post');
Route::post('/social/post/comment/{id}','SocialController@comment');

Route::get('/social/post/like/{id}','SocialController@like');

Route::get('/social/friends','SocialController@friends');



Route::post('/social/search','SocialController@search');
Route::get('/social/search-profile/{id}','SocialController@search_profile');
Route::get('/social/message/{id}','SocialController@message');
Route::post('/message/store/{id}','SocialController@messageStore');