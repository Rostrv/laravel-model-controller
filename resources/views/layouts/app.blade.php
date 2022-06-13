<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> laravel-model-controller</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body class="bg-dark">
    <header class="p-5">
        <div class="text-center">
            <h1 class="text-white glow">Movies</h1>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
    </footer>
</body>

</html>