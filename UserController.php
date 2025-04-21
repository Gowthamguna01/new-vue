<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{

    public function showsignup(){
        return Inertia::render('signup');
    }

    public function signup(Request $request) {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required',
        ]);
        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
        ]);
        return redirect()->route('login.form');
    }


        public function login(Request $request)
        {
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors([
            'email'=>'The provided credentials do not match our records.Signup and Login',
        ]);
    }


    public function dashboard(){
           return Inertia::render('dashboard',[
               'user'=>auth()->user()
           ]);

        }


}
