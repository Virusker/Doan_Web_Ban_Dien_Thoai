<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Phương thức GET để hiển thị trang đăng nhập
    public function index()
    {
        return view('login');
    }

    // Phương thức POST để xử lý dữ liệu từ form đăng nhập
    public function login(Request $request)
    {
        // Xử lý dữ liệu form
        $credentials = $request->only('email', 'password');
        $email = $request->email;
        $password = $request->password;

        $remember = $request->has('remember') ? true : false;
        
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {


        // if (Auth::attempt($credentials)) {
            // Nếu đăng nhập thành công redirect về trang index
            return redirect()->intended('/');
            // return redirect()->intended('dashboard');
        } else {
            // Nếu đăng nhập thất bại
            return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
        }


        // // return $credentials;
        // // Ví dụ: Kiểm tra đăng nhập với hệ thống xác thực của Laravel

        // if (auth()->attempt($credentials)) {
        //     // Nếu đăng nhập thành công redirect về trang index
        //     return redirect()->intended('/');
        //     // return redirect()->intended('dashboard');
        // } else {
        //     // Nếu đăng nhập thất bại
        //     return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
        // }
    }
}
