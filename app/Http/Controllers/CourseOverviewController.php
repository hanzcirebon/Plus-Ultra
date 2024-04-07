<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CricosCourse;
use App\Models\CourseDescription;

class CourseOverviewController extends Controller
{
    # Load course  overview page.
    public  function index() {
        $courses = CourseDescription::select('course_name','course_single_desc')->get();

        //dd($courses);
        return view('course_overview', compact('courses'));
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
}
