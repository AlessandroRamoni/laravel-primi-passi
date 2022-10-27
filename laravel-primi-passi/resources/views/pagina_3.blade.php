<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina_3</title>
</head>

<body>

    <h1>Benvenuti a pagina 3</h1>

    @php
        $festivals = ['defqon', 'qlimax', 'inqontrol', 'exqlusive', 'decibel', 'thunderdome', 'dominator'];
    @endphp

    <section>
        <ul>
            @foreach ($festivals as $festival)
                <li>{{ $festival }}</li>
            @endforeach
        </ul>
    </section>

</body>

</html>
