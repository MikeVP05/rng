<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

        $validated = $validator->validated();

        $user = new User();
        $user->password = Hash::make($validated['password']);
        $user->email = $validated['email'];
        $user->name = $validated['username'];
        $user->save();
 
        return redirect('/login')->with('success', 'Registration successful');
    }

    public function login(Request $request) {
        if (Auth::attempt($request->except(['_token']))) {
            return redirect('/');
        }else{
            return back()->with('error', 'Invalid login credentials');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
