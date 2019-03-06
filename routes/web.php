<?php

Route::get('/','CheckController@signin_method')->name('login');
Route::post('/post1','CheckController@loginCheck');
Route::get('/signup','CheckController@signup_method');
Route::post('/abc','CheckController@postData');
Route::get('/dashboard','TaskController@show')->name('dashboard')->middleware('checklogin');
Route::get('/logout', 'CheckController@logout');

//Task controller for Task work

Route::group(['middleware'=>'checklogin'],function(){
	Route::post('/task', 'TaskController@postdata');
	Route::get('/showinsertdata', 'TaskController@show')->name('showinsertdata');
	Route::delete('/task/{task}','TaskController@deletedata');
	Route::get('/showafterdelete', 'TaskController@show')->name('showafterdelete');
	Route::get('/editTask/{task}', 'TaskController@update');
	Route::post('/editTask/{task}', 'TaskController@postupdatedata');
});




?>