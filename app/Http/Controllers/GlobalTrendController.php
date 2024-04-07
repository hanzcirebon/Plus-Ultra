<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalTrendController extends Controller
{
    # Load Global Trend page
    public function index() {
        return view('global_trend');
    }
}
