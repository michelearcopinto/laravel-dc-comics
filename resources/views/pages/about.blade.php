@extends('layouts.basic')

@section('title', 'Benvenuto | About')

@section('style')
    <style>
        main {
            h1 {
                text-align: start;
            }

            li {
                list-style-type: disc;
                margin-left: 1rem;
            }
        }
    </style>
@endsection

@section('content')
    <h1>Pagina di about</h1>

    <p>{{ $lorem }}</p>
@endsection
