<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    public function halamanlogin (Request $request){
        $request->session()->forget('email');
        return view('sign-in');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            $request->Session()->put('email', $request->email);     //session yang digunakan
            return redirect('/home');
    }
    return redirect('/');
    }
}
