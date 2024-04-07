<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    # Load Jobs Overview Page.
    public function index() {
        return view('job_overview');
    }
}
