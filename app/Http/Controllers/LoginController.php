<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Str;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function postlogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }   
        session()->flash('error', 'Email or Password is Invalid');
        return redirect('/login');
    }

    public function signup(){
        return view('auth.signup');
    }

    public function postsignup(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'role' => 'user',
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/login')->with('status', 'Anda berhasil registrasi');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
