<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function home(){
        return view('home');
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function homepage(){
        return view('homepage');
    }

    public function main(){
        return view('main');
    }
}

