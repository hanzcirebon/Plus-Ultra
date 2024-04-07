<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    # return homepage view
    public function index() {
        return view('home');
    }
}
