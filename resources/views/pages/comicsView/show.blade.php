@extends('layouts.basic')

@section('title', 'Comics | Read Show')

@section('style')
    <style>
    </style>
@endsection

@section('main_content')
    <h1>{{ $comic->title }}</h1>

    <div class="comic-description">
        <figure>
            <img src="{{ $comic->thumb }}" alt="comic-image-{{ $comic->id }}">
        </figure>
        <div class="comic-details">
            <h2>Descrizione:</h2>
            <p>
                {{ $comic->description }}
            </p>
            <ul>
                <li><strong>Serie: </strong>{{ $comic->series }}</li>
                <li><strong>Genere: </strong>{{ $comic->type }}</li>
                <li><strong>Prezzo: </strong>{{ $comic->price }}</li>
                <li><strong>Disponibile dal: </strong>{{ $comic->sale_date }}</li>
            </ul>
        </div>
    </div>
@endsection
