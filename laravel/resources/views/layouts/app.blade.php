<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kovács Ferenc</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])
    @stack('scripts')
<body>
<header>
    @include('layouts.navbar')
</header>
    <div class="main-container p-5 d-flex justify-content-center align-items-center flex-column">
        @include('layouts.bg-anim')
        @yield('content')
    </div>
<footer>
    @include('layouts.footer')
</footer>
</body>
</html>