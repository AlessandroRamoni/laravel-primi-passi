<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @php

        $numeri = [2, 4, 5, 10, 9];

    @endphp

    <div>
        <ul>
            @foreach ($numeri as $numero)
                <li>{{ $numero }}</li>
            @endforeach
        </ul>
    </div>

    <h1>holaaaaaaaaaaaaaaaaaaaaaa</h1>

</body>

</html>
