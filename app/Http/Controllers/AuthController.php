<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginForm() {
        return view('auth.login');
    }

    public function registerForm(){
        return view('auth.register');
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
 
        // $validated = $validator->validated();
        return redirect('/login')->with('success', 'Registration successful');
    }

    public function login(Request $request) {

    }
}
