<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>

<body>

    <style>
        div ul {
            display: flex;
            gap: 20px;
            list-style: none;
            text-decoration: none;
        }
    </style>

    <h1>Welcome Home</h1>

    <header>

        @php

            $links = ['pagina_1', 'pagina_2', 'pagina_3', 'pagina_4'];

        @endphp

        <div>
            <ul>
                @foreach ($links as $link)
                    <li><a href="{{ $link }}">{{ $link }}</a></li>
                @endforeach
            </ul>
        </div>

    </header>

</body>

</html>
