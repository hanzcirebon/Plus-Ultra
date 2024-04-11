<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CricosCourse;
use App\Models\CourseDescription;

class CourseOverviewController extends Controller
{
    # Load course  overview page.
    public  function index(Request $request) {
        if ($request->ajax()){
            $course_name = $request->course_name;
            $course_fields = $request->course_fields;
            # Do the data filtering  and sorting here.
            $query = CricosCourse::join('course_description', 'course_description.course_name', '=', 'cricos.course_name')
                ->select('cricos.course_name', 'course_description.course_single_desc', 'cricos.category');

            
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

            $courses = $query->select('cricos.course_name','course_description.course_single_desc')
                ->distinct('cricos.course_name')
                ->get();

            # check if the data is found or not
            if ($courses->isEmpty()) {
                return response()->json(['message' => 'No courses found, please note this is Text Sensitive', 'data' => [], 'status' => 'empty'], 200);
            }
            return response()->json(['data' => $courses, 'status' => 'found'], 200);
        
        }else{
            $courses = CourseDescription::select('course_name','course_single_desc')
                ->get();
            
            //dd($courses);
            return view('course_overview', compact('courses'));
        }
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
