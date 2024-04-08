<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseOverviewController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GlobalTrendController;

# Route for welcome page
Route::get('/welcome', function (){
    return view('welcome');
});

# Routing From/For Home Page
Route::get('/', [HomepageController::class, 'index'])->name('home');

# Routing From/For Course Overview Page
Route::get('/course-overview', [CourseOverviewController::class, 'index'])->name('course-overview.index');
Route::get('/course-overview/{course_name}', [CourseOverviewController::class, 'LoadCourseDesc'])->name('courses-overview.detail');

# Routing From/For global trend page
Route::get('global-trend', [GlobalTrendController::class, 'index'])->name('global-trend.index');

# Routing For Career choices Page
Route::get('/career-choices', [CareerController::class, 'index'])->name('career-choices.index');
Route::get('/career-choices/{category_name}', [CareerController::class, 'LoadCareerDetails'])->name('career-choices.details');

# Routing For Jobs Overview Page
Route::get('/jobs-overview', [JobController::class, 'index'])->name('job-overview.index');
Route::get('/jobs-overview/{job_title}', [JobController::class, 'LoadJobDetail'])->name('job-overview.details');