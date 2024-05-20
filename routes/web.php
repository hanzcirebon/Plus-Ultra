<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseOverviewController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\GlobalTrendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\SoftSkillController;
use App\Http\Controllers\SpecializationController;

use App\Http\Middleware\CheckGlobalPassword;
use App\Http\Middleware\CheckRecommendationSession;


// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::get('/login-auth', [LoginController::class, 'auth_login'])->name('login-auth');

// // Test
// // Route::get('/test', function(){
// //     return view('test');
// // });

// // Add middleware to  protect the route from unauthenticated users.
// Route::middleware(CheckGlobalPassword::class)->group(function(){

// Routing From/For Home Page
Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::post('/course-search', [HomepageController::class, 'search_course'])->name('course-search-home');
Route::get('/course-overview-field/{selected_field}', [HomepageController::class,'course_overview_field'])->name('course-interest');

// Routing From/For Course Overview Page
Route::match(['get','post'], '/course-overview', [CourseOverviewController::class, 'index'])->name('course-overview.index');
Route::get('/course-overview/{course_name}', [CourseOverviewController::class, 'LoadCourseDesc'])->name('courses-overview.detail');
//Route::post('/course-overview', [CourseOverviewController::class, ''])->name('course-search');

// Routing From/For global trend page
Route::get('global-trend', [GlobalTrendController::class, 'index'])->name('global-trend.index');

// Routing For Jobs Overview Page
Route::match(['get', 'post'], '/jobs-overview', [JobController::class, 'index'])->name('job-overview.index');
Route::get('/search-job', [JobController::class, 'search_job'])->name('search-jobs');
Route::get('/jobs-overview/{job_title}', [JobController::class, 'LoadJobDetail'])->name('job-overview.details');

// Quick Questions
Route::get('/questions', [QuestionsController::class, 'index'])->name('quick-questions');
Route::post('/submit-answer', [QuestionsController::class, 'predict'])->name('predict');
Route::middleware(CheckRecommendationSession::class)->group(function(){
    Route::get('/questions/recommendation', [QuestionsController::class, 'showRecommendation'])->name('recommendation');
    //Route::get('/questions/unlock-your-future')->name('unlock-future');
});

// Soft skills
Route::get('/soft-skill', [SoftSkillController::class,'index'])->name('soft-skill.index');
Route::get('/soft-skill/communication', [SoftSkillController::class,'communication'])->name('soft-skill.communication');
Route::get('/soft-skill/problem-solving', [SoftSkillController::class,'problem_solving'])->name('soft-skill.problem_solving');
Route::get('/soft-skill/teamwork', [SoftSkillController::class,'teamwork'])->name('soft-skill.teamwork');
Route::get('/soft-skill/download', [SoftSkillController::class,'skill_download'])->name('soft-skill.download');

// Specialization
Route::get('/specialization', [SpecializationController::class,'index'])->name('specialization.index');
Route::get('/specialization/{specialization_field}', [SpecializationController::class,'show_roadmap'])->name('specialization.content');


// });
