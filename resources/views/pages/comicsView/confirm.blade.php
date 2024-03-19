@extends('layouts.basic')

@section('title', 'Comics | Read Show')

@section('style')
    <style>
        .comic-background {
            height: 100vh;
            position: relative;
            background-color: white;
            filter: brightness(50%) blur(2px);

            .blurred-comic {
                text-decoration: line-through;
            }

        }

        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-decoration: initial;

            h1 {
                color: white;
            }
        }

        form {
            display: inline-block
        }
    </style>
@endsection

@section('main_content')

    <div class="comic-background">
        <div class="blurred-comic">
            <h1 style="margin: 0">{{ $comic->title }}</h1>

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
        </div>
    </div>

    <div class="overlay">
        <h1>Sei sicuro di voler eliminare?</h1>

        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">

            @csrf

            @method('DELETE')

            <input class="button btn-delete" type="submit" value="Elimina fumetto">
        </form>
        <a class="button" href="{{ route('comics.index') }}">Torna a tutti i fumetti</a>
    </div>

@endsection
