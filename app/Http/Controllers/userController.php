<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class userController extends Controller
{
    function index(){
        return view('index');
    }


    function register(){
        return view('register');
    }


    function login(){
        return view('login');
    }

    function registerUser(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required | email | unique:users',
            'password'=>'required | confirmed'
        ]);
        $userData=User::create($data);
        if ($userData) {
            return redirect('/login');
        }
        return redirect()->route('register')->withInput();
    }


    function loginUser(Request $request)
    {
        $credentials=$request->validate([
            'email'=>'required | email',
            'password'=>'required'
        ]);


        if(Auth::attempt($credentials)){
            return redirect()->route('dashboardPage');
        }

        return redirect()->route('login')->withInput();
    }

    function dashboard(){
        if (Auth::check()) {
            return view('dashboard');
        }
        else{
        return redirect()->route('login');
        }
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    function profile()
    {
        if (Auth::check()){
            return view('profile');
        }
        else{
            return redirect()->route('login');
        }
//        return view('profile');

    }


}
