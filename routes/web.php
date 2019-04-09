<?php

use Carbon\Carbon;


Route::get('/','PagesController@getHome');
Route::get('/about','PagesController@getabout');
Route::get('/contact','PagesController@getcontact');
Route::post('/contact','MessagesController@submit');
Route::get('/messages','MessagesController@getMessage');

Route::get('/dates', function() {
     //return Carbon::now();
     //Carbon that contain a LOT methods that showing dateTime readable way for Humans
     return Carbon::now()->diffForHumans();
     //Carbon::addDay() &
});
