<?php

namespace App\Http\Controllers;

use App\Models\CricosCourse;
use Illuminate\View\View;

class WebController extends Controller
{
    public function LoadHomepage()
    {
        $categories = CricosCourse::select('category')
            ->distinct()
            ->orderBy('category')
            ->take(6)
            ->get();

        return view('home', compact('categories'));
    }
}