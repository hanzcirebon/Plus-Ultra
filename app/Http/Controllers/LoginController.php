<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function auth_login(Request $request){
        // take the user's input password
        $password = $request->input('password');
        // check for the password
        if($password === 'Th15_is4V3_rY_5eCur3D_PwD'){
            // create a session and set it to true
            $request->session()->regenerate();
            $request->session()->put('is_authenticated', true);
            // go to the intended home page
            return redirect()->intended('/');
        }else{
            // incorect passwords
            return back()->withErrors(['wrong_password' => "Password is incorrect, Please contact TA05 for the Credentials."]);
        }
    }
}
