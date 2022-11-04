<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Primi passi con laravel</title>
</head>

<body>
    <h1>
        @yield('title')
    </h1>
    <div class="container">
        @include('shared.nav')
        @yield('content')
    </div>

</body>

</html>
