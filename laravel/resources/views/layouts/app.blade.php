<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kovács Ferenc</title>
</head>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])
    @stack('scripts')
<body>
<header>
    @include('layouts.navbar')
</header>

<div class="main-container">
    @yield('content')
</div>
</body>
</html>