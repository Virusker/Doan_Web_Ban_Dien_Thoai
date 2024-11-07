<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
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
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        //        'email' => 'required|string|email|max:255|unique:Users',

        if ($request->password != $request->password_confirmation) {
            return back()->withErrors(['msg' => 'Mật khẩu không khớp']);
        }

        // $user = users::create($credentials);
        
        // check if user already exist
        if (User::where('email', $request->email)->exists()) {

            return back()->withErrors(['msg' => 'email đã tồn tại']);
        }


        $user = User::create([
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
