<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(RegisterRequest $request){
         $attributes = $request->validated();
         $user = new User();
            $user->name = $attributes['name'];  
            $user->email = $attributes['email'];
            $user->password = bcrypt($attributes['password']);
            $user->save();
            return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function login(LoginRequest $request){
        $attributes = $request->validated();
        if(Auth::attempt($attributes)){
            return redirect()->intended('dashboard');
        }
        return back()->with('error', 'Invalid credentials, try again.');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
