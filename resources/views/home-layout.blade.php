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

@extends('shared.layout')


@section('title')
    Hello World!
@endsection

@section('content')
    <div>
        @foreach ($data as $item)
            <div>
                <span>{{ $item['name'] }}</span>
                <span>{{ $item['email'] }}</span>
            </div>
        @endforeach
    </div>
@endsection
