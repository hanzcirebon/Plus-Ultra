<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    # Load the career page.
    public function index() {
        return view('career_choices');
    }

    # Load the career details with category name parameter.
    public function LoadCareerDetails(string $category_name) {
        return view('career_pathway');
    }
}
