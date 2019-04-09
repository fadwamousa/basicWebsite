<?php

use Carbon\Carbon;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact','MessagesController@submit');


Route::get('/dates', function() {
     //return Carbon::now();
     //Carbon that contain a LOT methods that showing dateTime readable way for Humans
     return Carbon::now()->diffForHumans();
     //Carbon::addDay() &
});
