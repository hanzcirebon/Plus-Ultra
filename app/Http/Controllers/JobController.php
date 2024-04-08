<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobTitleDesc;

class JobController extends Controller
{
    # Load Jobs Overview Page.
    public function index() {
        $jobs = JobTitleDesc::select('job_title')
            ->get();

        #dd($jobs);
        return view('job_overview', compact('jobs'));
    }

    public function LoadJobDetail(string $job_title){
        $job = JobTitleDesc::where('job_title', '=', $job_title)
            ->first();

        //dd($job);
        return view('job_description', compact('job'));
    }
}
