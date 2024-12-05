@extends('layout/layout')

@section('title', 'Đăng Nhập')

@section('content')

    <h2>Đăng Nhập</h2>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style="color:red;">{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <!-- <form action="/login" method="post">
        @csrf
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Mật khẩu:</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="checkbox" id="remember" name="remember">
        <button type="submit">Đăng Nhập</button>
    </form> -->

<form action="/login" method="post" id="sign-in-form" class="needs-validation" novalidate>
    @csrf
    <div class="form-group py-2">
        <label class="mb-2" for="sign-in-email">Email:</label>
        <input type="email" id="sign-in-email" name="email" placeholder="Nhập email" class="form-control p-2" required>
        <div class="invalid-feedback text-start">
            Vui lòng nhập email phù hợp.
        </div>
    </div>
    <div class="form-group pb-3">
        <label class="mb-2" for="sign-in-password">Mật khẩu:</label>
        <input type="password" id="sign-in-password" name="password" placeholder="Nhập mật khẩu." class="form-control p-2" required>
        <div class="invalid-feedback text-start">
            Vui lòng nhập mật khẩu.
        </div>
    </div>
    <label class="py-2">
        <input type="checkbox" id="sign-in-remember" required class="d-inline">
        <span class="label-body">Lưu tài khoản</span>
        <span class="label-body"><a href="#" class="fw-bold">Quên mật khẩu:</a></span>
    </label>
    <br>
    <label for="">
        <span>
            Bạn chưa có tài khoản? <a href="/register" class="fw-bold">Đăng ký</a>
        </span>
    </label>
    <button type="submit" id="sign-in-submit" class="btn btn-login btn-dark w-100 my-3">Đăng nhập</button>
    
</form>
@endsection