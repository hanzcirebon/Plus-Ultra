<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CricosCourse;
use App\Models\CourseDescription;

class CourseOverviewController extends Controller
{
    # Load course  overview page.
    public  function index() {
        # Join the course_description and join it with cricos
        $courses = DB::table( 'course_description' )
            ->join('cricos', 'cricos.course_name', '=', 'course_description.course_name')
            ->select('course_description.course_name', 'category', 'course_single_desc')
            ->get();
        
        # Select distinct values for categories
        $distinctCategories = $courses->pluck('category')->unique();

        //dd($distinctCategories);
        //dd($courses);
        return view('course_overview', compact('courses', 'distinctCategories'));
    }

    # Load course  details by taking the course name as parameter.
    public function LoadCourseDesc(string $course_name) {
        # Join CRICOS and Course Description table
        $course_details = CricosCourse::join('course_description','course_description.course_name','=','cricos.course_name')
            ->where('cricos.course_name','=',$course_name)
            ->select('institution_name','duration_weeks','total_course_cost')
            ->distinct('institution_name')
            ->get();
        
        # Load the course description from Course Description Table.
        $course_content = CourseDescription::select('course_name','course_desc')
            ->where('course_name','=',$course_name)
            ->first();

        //dd($course_details);
        //dd($course_content);
        return view('course_overview_template', compact('course_details','course_content'));
    }

    public function filterCourses(Request $request) {
        $selectedCategories = $request->input('categories');
    
        // Filter courses based on selected categories
        $filteredCourses = CourseDescription::whereIn('category', $selectedCategories)->get();
    
        // Return view with filtered courses
        return view('partials.courses', ['courses' => $filteredCourses]);
    }
}
