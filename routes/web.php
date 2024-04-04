<?php

use Illuminate\Support\Facades\Route;

# Route for welcome page
Route::get('/welcome', function (){
    return view('welcome');
});

# Route for homepage
Route::get('/', function () {
    return view('home');
});

# Route for course overview page
Route::get('/course-overview', function (){
    return view('course_overview');
});

# Route for global trend page
Route::get('global-trend', function(){
    return view('global_trend');
});

# Route for career choices page
Route::get('career-choices', function(){
    return view('career_choices');
});

# Route for about us page
Route::get('about-us', function(){
    return view('about_us');
});