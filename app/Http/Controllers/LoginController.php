<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }
    function store(Request $request){
        $user = $request->input('user');
        $password = $request->input('password');
        $token = Login::getToken($user, $password);
        if($token){
            $request->session()->put('token', $token);
            return redirect('/');
        }
        else{
            return view('login')->withMessage('Credenciales incorrectas');
        }
    }

    function logout(){
        session()->forget('token');
        return redirect('/');
    }
}
