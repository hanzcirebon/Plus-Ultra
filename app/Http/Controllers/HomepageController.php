<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseDescription;

class HomepageController extends Controller
{
    # return homepage view
    public function index() {
        return view('home');
    }

    public function search_course(Request $request){
        $course_name = $request->input('course_name');
        #dd($course_name);
        $courses = CourseDescription::select('course_name','course_single_desc')
            ->where('course_name', 'LIKE','%' . $course_name . '%')
            ->get();
        #dd($courses);
        return view('course_overview', compact('courses', 'course_name'));
    }
}
