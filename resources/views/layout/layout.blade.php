<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Include CSS files here -->
    @vite(['resources/css/Style.css','resources/css/responsive.css','resources/css/product.css','resources/css/responsive.css','resources/css/bootstrap/bootstrap.min.css','resources/css/productDetail.css','resources/css/cart.css'])

    @vite(['resources/js/bootstrap/bootstrap.min.js','resources/js/main.js','resources/js/cart.js'])

    @yield('css')
    @yield('js')
</head>

<body>
    <!-- Header -->
<!-- <div class="header"> -->
    @include('layout.header')
<!-- </div> -->

<!-- Navigation -->


    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        @include('layout.footer')
    </footer>
    <!-- Include JS files here -->
</body>
</html>
