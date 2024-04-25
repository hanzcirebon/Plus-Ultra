<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoftSkillController extends Controller
{
    public function index(){
        return view('soft_skills/soft_skill_index');
    }

    public function c(){
        return view('soft_skills/soft_skill_comm');
    }

    public function d(){
        return view('soft_skills/soft_skill_download');
    }

    public function mc(){
        return view('soft_skills/soft_skill_menu_com');
    }

    public function mp(){
        return view('soft_skills/soft_skill_menu_problem_solving');
    }

    public function mt(){
        return view('soft_skills/soft_skill_menu_tw');
    }

    public function p(){
        return view('soft_skills/soft_skill_ps');
    }

    public function t(){
        return view('soft_skills/soft_skill_tw');
    }
}
