<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobTitleDesc;
use App\Models\CricosCourse;
use Illuminate\Support\Facades\DB;


class JobController extends Controller
{
    # Load Jobs Overview Page.
    public function index(Request $request) {
        # check if the request is an AAJAX request
        if ($request->ajax()){
            $job_title = $request->job_title;
            $course_fields = $request->course_fields;

            # create query for data filtering
            $query = DB::table('course_job_titles')
                ->join('cricos', 'course_job_titles.course', '=', 'cricos.course_name')
                ->select('course_job_titles.job_title', 'cricos.category');

            // If course fields are provided, apply additional filtering
            if (!empty($course_fields)) {
                // Find for the fields
                $query->whereIn('cricos.category', $course_fields);
            }

            // If job search bar is not provided
             if (!empty($job_title)){
                // Find for the job title
                $query->where('course_job_titles.job_title', 'LIKE', '%' . $job_title . '%');
            }

            $jobs = $query->select('course_job_titles.job_title')
                ->distinct('course_job_titles.job_title')
                ->get();
            
            # check if the data is found or not
            if ($jobs->isEmpty()) {
                return response()->json(['message' => 'No jobs found, please note this is Text Sensitive', 'data' => [], 'status' => 'empty'], 200);
            }
            return response()->json(['data' => $jobs, 'status' => 'found'], 200);

        }else{
            $jobs = JobTitleDesc::select('job_title')
                ->get();

            #dd($jobs);
            return view('job_overview', compact('jobs'));
        }
    }

    # Load Jobs Overview Page.
    public function search_job(Request $request) {
        $searchTerm = $request->searchTerm;
        $jobs = JobTitleDesc::select('job_title')
            ->where('job_title', 'LIKE','%' . $searchTerm . '%')
            ->get();
        return  response()->json($jobs);
    }

    public function LoadJobDetail(string $job_title){
        $job = JobTitleDesc::where('job_title', '=', $job_title)
            ->first();

        //dd($job);
        return view('job_description', compact('job'));
    }
}
