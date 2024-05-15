<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseDescription;
use App\Models\CricosCourse;

class HomepageController extends Controller
{
    # return homepage view
    public function index() {
        return view('home');
    }

    public function search_course(Request $request){
        $course_name = $request->input('course_name');

        $courses = CourseDescription::select('course_name','single_desc')
            ->whereRaw('LOWER(course_name) LIKE ?', ['%'.trim(strtolower($course_name)).'%'])
            ->get();

        // dd($courses);

        if ($courses->isEmpty()){
            $message = "Oops, ".$course_name." is not found.";
            return view('course_overview', compact('courses', 'message'));
        }else{
            return view('course_overview', compact('courses', 'course_name'));
        }

    }

    public function course_overview_field(string $selected_field){
        $courses = CricosCourse::join('course_description', 'course_description.course_name', '=', 'cricos.course_name')
                ->where('cricos.category', 'LIKE','%'. $selected_field .'%')
                ->select('cricos.course_name', 'course_description.single_desc')
                ->distinct('cricos.course_name')
                ->get();
        // dd($courses);
        return view('course_overview', compact('courses'));
    }
}
