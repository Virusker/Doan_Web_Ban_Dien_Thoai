<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- Include CSS files here -->
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Website Header</h1>
    </header>

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
        <p>Website Footer</p>
    </footer>
    <!-- Include JS files here -->
</body>
</html>
