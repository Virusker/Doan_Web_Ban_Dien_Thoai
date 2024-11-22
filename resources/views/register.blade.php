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



        <form action="/register" method="post" id="register-form" class="needs-validation" novalidate>
                                    @csrf
                                    <div class="form-group py-2">
                                        <label class="mb-2" for="register-email">Emai:</label>
                                        <input type="email" id="register-email" name="username" placeholder="Nhập email." class="form-control p-2" required>
                                        <div class="invalid-feedback text-start">
                                            Vui lòng nhập email phù hợp.
                                        </div>
                                    </div>
                                    <div class="form-group py-2">
                                        <label class="mb-2" for="register-password">Mật khẩu:</label>
                                        <input type="password" id="register-password" name="password" placeholder="Nhập mật khẩu." class="form-control p-2 password-register" required>
                                        <div class="invalid-feedback text-start">
                                            Vui lòng nhập mật khẩu.
                                        </div>
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="mb-2" class="form-label">Nhập lại mật khẩu</label>
                                        <input class="form-control p-2 password_confirmation" id="register-password-confirm" name="password_confirmation" placeholder="Xác thực mật khẩu" type="password" required>
                                        <div class="invalid-feedback text-start invalid-confirm-pw">
                                            Không khớp với mật khẩu vừa nhập.
                                        </div>
                                    </div>
                                    <label class="py-2">
                                        <input type="checkbox" id="register-agree" required class="form-check-input d-inline">
                                        <span class="label-body">Đồng ý với <a href="#" class="fw-bold">chính sách bảo mật</a></span>
                                        <span class="invalid-feedback">
                                            Bạn chưa đồng ý chính sách bảo mật.
                                          </span>
                                    </label>
                                    <button type="submit" id="register-submit" class="btn btn-register btn-dark w-100 my-3">Đăng ký</button>
                                </form>
@endsection