    {{-- composer create-project --prefer-dist laravel/laravel:^7.0 laravel-primi-passi
    cd laravel-primi-passi
    php artisan serve --}}


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/app.css">
        <title>Homepage</title>
    </head>

    <body>

        <h1>Welcome Home</h1>

        <header>

            @php

                $links = ['pagina_1', 'pagina_2', 'pagina_3', 'pagina_4'];

            @endphp

            <div class="elenco">
                <ul>
                    @foreach ($links as $link)
                        <li><a href="{{ $link }}">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>

        </header>

    </body>

    </html>
