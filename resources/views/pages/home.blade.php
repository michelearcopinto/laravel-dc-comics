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

@section('main_content')
    <h1>Pagina Home</h1>

    <a class="button" href="{{ route('comics.index') }}">Vai a tutti i fumetti</a>
@endsection
