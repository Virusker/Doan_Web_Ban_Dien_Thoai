<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\users;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){

        // $credentials = $request->only('name', 'email', 'password');
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($request->password != $request->password_confirmation) {
            return back()->withErrors(['msg' => 'Password not match']);
        }

        // $user = users::create($credentials);


        $user = users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // return $user;
        // check if user is created
        if ($user) {
            return redirect()->intended('/login');
        } else {
            return back()->withErrors(['msg' => 'Error creating user']);
        }
        // return $credentials;
    }
}
