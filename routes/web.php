<?php
# hanif is here
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseOverviewController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GlobalTrendController;
use App\Http\Controllers\LoginController;


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login-auth', [LoginController::class, 'auth_login'])->name('login-auth');

# Add middleware to  protect the route from unauthenticated users.
Route::middleware('CheckGlobalPassword')->group(function(){
    # Routing From/For Home Page
    Route::get('/', [HomepageController::class, 'index'])->name('home');
    #Route::post('/course-search', [HomepageController::class, 'search_course'])->name('course-search-home');

    # Routing From/For Course Overview Page
    Route::match(['get','post'], '/course-overview', [CourseOverviewController::class, 'index'])->name('course-overview.index');
    Route::get('/course-overview/{course_name}', [CourseOverviewController::class, 'LoadCourseDesc'])->name('courses-overview.detail');
    #Route::post('/course-overview', [CourseOverviewController::class, ''])->name('course-search');

    # Routing From/For global trend page
    Route::get('global-trend', [GlobalTrendController::class, 'index'])->name('global-trend.index');

    # Routing For Career choices Page
    Route::get('/career-choices', [CareerController::class, 'index'])->name('career-choices.index');
    Route::get('/career-choices/{category_name}', [CareerController::class, 'LoadCareerDetails'])->name('career-choices.details');

    # Routing For Jobs Overview Page
    Route::match(['get', 'post'], '/jobs-overview', [JobController::class, 'index'])->name('job-overview.index');
    Route::get('/search-job', [JobController::class, 'search_job'])->name('search-jobs');
    Route::get('/jobs-overview/{job_title}', [JobController::class, 'LoadJobDetail'])->name('job-overview.details');
});
