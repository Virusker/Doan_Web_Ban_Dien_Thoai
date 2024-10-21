<a href="/">home </a>
<a href="/about">about </a>
<a href="/contact">contact </a>
@if (Auth::check())
    <a href="/profile">{{ Auth::user()->name }}</a>
    <a href="/logout">logout </a>
@else
<a href="/login">đăng nhập </a>
<a href="/register">đăng ký </a>
@endif