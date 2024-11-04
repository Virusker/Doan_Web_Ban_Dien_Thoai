@extends('layout_admin/layout')

@section('title', 'Đăng Nhập')

@section('content')

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style="color:red;">{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <!-- <form action="/admin/login" method="post">
        @csrf
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Mật khẩu:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit">Đăng Nhập</button>
    </form> -->

    <form action="/admin/login" method="post">
    @csrf
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal">Đăng nhập</h1>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <!-- <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div> -->
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
  </form>
@endsection