<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>pizza house</title>
        <link href="/css/loogin.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4430c6a384.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/main.css" rel= "stylesheet">
    </head>
@yield('content')
<footer>
        @copyright by pizza house v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</footer>
</html>