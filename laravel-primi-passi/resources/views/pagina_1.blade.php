<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina_1</title>
</head>

<body>
    <h1>Benvenuti a pagina 1</h1>
    @php

        $numeri = [2, 4, 5, 10, 9, 13, 25, 43, 45, 3, 45, 22, 663, 4564, 0];

    @endphp

    <div>
        <ul>
            @foreach ($numeri as $numero)
                <li>{{ $numero }}</li>
            @endforeach
        </ul>
    </div>



</body>

</html>
