<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class login extends Controller
{
    public function envoyer()
    {

     return view('login');

    }
    public function authenticate(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            return  "retrouver";
        }
        else{
            return "pas enregistrer";
        }



    }  
}
