@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

@section('style')
    <style>
        main {
            padding-inline: 50px;

            h1 {
                color: blue;
            }

            li {
                list-style-type: disc;
                margin-left: 1rem;
            }
        }
    </style>
@endsection

@section('content')
    <h1>{{ $greeting }}</h1>

    <ul>
        @foreach ($data as $element)
            {{-- {{ dd($loop) }} --}}

            <li>
                {{ $element['name'] }}
            </li>
        @endforeach
    </ul>
@endsection
