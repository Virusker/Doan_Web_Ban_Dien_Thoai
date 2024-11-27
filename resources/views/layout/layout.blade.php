<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Include CSS files here -->
    @vite(['resources/css/Style.css','resources/css/responsive.css','resources/css/product.css','resources/css/responsive.css','resources/css/bootstrap/bootstrap.min.css','resources/css/productDetail.css','resources/css/cart.css'])

    @vite(['resources/js/bootstrap/bootstrap.min.js','resources/js/main.js'])
</head>

<body>
    <!-- Header -->
<!-- <div class="header"> -->
    @include('layout.header')
<!-- </div> -->

<!-- Navigation -->
<div class="nav">
    @include('layout.nav')
</div>

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
