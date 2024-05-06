<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CricosCourse;
use App\Models\CourseDescription;

class CourseOverviewController extends Controller
{
    # Load course  overview page.
    public  function index(Request $request) {

        // Check for ajax requests
        if ($request->ajax()){
            $course_name = $request->course_name;
            $course_fields = $request->course_fields;
            // Do the data filtering  and sorting here.
            $query = CricosCourse::join('course_description', 'course_description.course_name', '=', 'cricos.course_name')
                ->select('cricos.course_name', 'course_description.single_desc', 'cricos.category');

            // If course fields are provided, apply additional filtering
            if (!empty($course_fields)) {
                // Find for the fields
                $query->whereIn('cricos.category', $course_fields);
            }

            // If course search bar is not provided
            if (!empty($course_name)){
                // Find for the course name
                $query->where('cricos.course_name', 'LIKE', '%' . $course_name . '%');
            }

            // Get distinct value for courses
            $courses = $query->select('cricos.course_name','course_description.single_desc')
                ->distinct('cricos.course_name')
                ->get();

            // Check if the data is found or not
            if ($courses->isEmpty()) {
                return response()->json(['message' => 'No courses found, please note this is Text Sensitive', 'data' => [], 'status' => 'empty'], 200);
            }
            return response()->json(['data' => $courses, 'status' => 'found'], 200);
        
        }
        // The users come directly from the link
        else{
            $courses = CourseDescription::select('course_name','single_desc')
                ->get();
            
            //dd($courses);
            return view('course_overview', compact('courses'));
        }
    }

    # Load course  details by taking the course name as parameter.
    public function LoadCourseDesc(string $course_name) {
        # Join CRICOS and Course Description table
        $universities = CricosCourse::join('course_description','course_description.course_name','=','cricos.course_name')
            ->where('cricos.course_name','=',$course_name)
            ->select('institution_name','duration_weeks','estimated_total_course_cost')
            ->distinct('institution_name')
            ->get();
        
        # Load the course description from Course Description Table.
        $course_content = CourseDescription::where('course_name','=',$course_name)
            ->first();

        //dd($universities);
        //dd($course_content);
        return view('course_overview_template', compact('universities','course_content'));
    }

    public function filterCourses(Request $request) {
        $selectedCategories = $request->input('categories');
    
        // Filter courses based on selected categories
        $filteredCourses = DB::table('course_description')
                            ->join('cricos', 'cricos.course_name', '=', 'course_description.course_name')
                            ->whereIn('course_description.category', $selectedCategories)
                            ->select('course_description.course_name', 'category', 'course_single_desc')
                            ->get();
    
        // Return view with filtered courses
        return view('partials.courses', ['courses' => $filteredCourses]);
    }    
}
