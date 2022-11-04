@php

    $data = [
        [
            'name' => 'Adri',
            'email' => 'adri@mail.com',
        ],
        [
            'name' => 'Pippo',
            'email' => 'pippo@mail.com',
        ],
        [
            'name' => 'Pluto',
            'email' => 'pluto@mail.com',
        ],
    ];

@endphp
@include('shared.html-start')
<h1>Hello World!</h1>

@include('shared.nav')

<div>
    @foreach ($data as $item)
        <div>
            <span>{{ $item['name'] }}</span>
            <span>{{ $item['email'] }}</span>
        </div>
    @endforeach
</div>

@include('shared.html-end')
