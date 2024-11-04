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
    <form action="/login" method="post">
        @csrf
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Mật khẩu:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <!-- remember -->
        <input type="checkbox" id="remember" name="remember">
        <button type="submit">Đăng Nhập</button>
    </form>
@endsection