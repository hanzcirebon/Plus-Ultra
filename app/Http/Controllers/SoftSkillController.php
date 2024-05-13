<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoftSkillController extends Controller
{
    public function index(){
        return view('soft_skills_main');
    }

    public function communication(){
        return view('soft_skills/communication');
    }

    public function problem_solving(){
        return view('soft_skills/problem_solving');
    }

    public function teamwork(){
        return view('soft_skills/teamwork');
    }

    public function skill_download(){
        return view('soft_skills/skill_download');
    }
}
