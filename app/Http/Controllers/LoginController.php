<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
   

    public function authenticate(Request $request)
    {
        $request->validate([
            'contact_number' => 'required|string|contact_number',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('contact_number', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    // public function logout() {
    //   Auth::logout();

    //   return redirect('login');
    // }

   
}
