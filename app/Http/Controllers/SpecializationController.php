<?php

namespace App\Http\Controllers;

use App\Models\ChosenField;
use App\Models\CricosCourse;

use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    public function index(){
        return view("specialization_index");
    }

    public function show_roadmap(string $chosen_field){
        // Get chosen field
        $content = ChosenField::where("field_title", "LIKE", "%".$chosen_field."%")->first()->data;
        // Get courses
        $courses = CricosCourse::where("specialization", "LIKE", "%".$chosen_field."%")
            ->select("course_name")
            ->distinct("course_name")
            ->get();

        $roadmap = json_decode($content, true);
        $roadmap = array_change_key_case($roadmap, CASE_LOWER);
        
        // dd($roadmap);
        return view('specialization_roadmap', compact('roadmap', 'chosen_field', 'courses'));
    }
}
