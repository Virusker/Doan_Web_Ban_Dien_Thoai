@extends('layout/layout')

@section('title', 'Đăng Ký')

@section('content')
    <h2>Đăng Ký</h2>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style="color:red;">{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form action="/register" method="post">
        @csrf
        <label for="name">Tên:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Mật khẩu:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="password_confirmation">Nhập lại mật khẩu:</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation"><br><br>
        <button type="submit">Đăng Ký</button>
@endsection