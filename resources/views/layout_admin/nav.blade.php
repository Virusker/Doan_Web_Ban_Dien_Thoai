<a href="/admin">admin</a>
<a href="/admin/catogeries">Danh mục</a>
<a href="/admin/products">Sản phẩm</a>
@if (Auth::check())
    <a href="/profile">{{ Auth::user()->name }}</a>
    <a href="/logout">logout </a>
@else
<a href="/login">đăng nhập </a>
<a href="/register">đăng ký </a>
@endif