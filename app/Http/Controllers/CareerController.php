<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\CourseDescription;

class CareerController extends Controller
{
    # Load the career page.
    public function index() {
        return view('career_choices');
    }

    # Load the career details with category name parameter.
    // public function LoadCareerDetails(string $category_name) {
    //     return view('career_pathway');
    // }

    public function LoadCareerDetails(string $category_name) {
        $courses = CourseDescription::leftJoin('cricos', 'course_description.course_name', '=', 'cricos.course_name')
            ->where('category', 'LIKE', '%' . $category_name . '%')
            ->select('course_description.course_name', 'course_single_desc')
            ->distinct('cricos.course_name')
            ->take(6)
            ->get();

        return view('career_pathway', compact('courses', 'category_name'));
    }
}
