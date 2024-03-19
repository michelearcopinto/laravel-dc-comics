@extends('layouts.basic')

@section('title', 'Comics | Read Index')

@section('style')
    <style>
    </style>
@endsection

@section('main_content')
    <h1>Index di Comics</h1>

    <a class="button" href="{{ route('comics.create') }}">Aggiungi fumetto</a>

    <div class="grid-comics">
        @foreach ($comics as $item)
            <div class="comic-box">
                <a href="{{ route('comics.show', ['comic' => $item->id]) }}">
                    <figure>
                        <img src="{{ $item->thumb }}" alt="comic-image-{{ $item->id }}">
                    </figure>
                </a>
                <div>
                    <a href=" {{ route('comics.show', ['comic' => $item->id]) }}">
                        <h3>{{ $item->title }}</h3>
                    </a>
                    <ul>
                        <li><strong>Serie: </strong>{{ $item->series }}</li>
                        <li><strong>Genere: </strong>{{ $item->type }}</li>
                        <li><strong>Prezzo: </strong>{{ $item->price }}</li>
                        <li><strong>Disponibile dal: </strong>{{ $item->sale_date }}</li>
                    </ul>
                    <a class="button" href="{{ route('comics.edit', ['comic' => $item->id]) }}">Modifica fumetto</a>
                    <a class="button btn-delete" href="{{ route('comics.confirm', ['comic' => $item->id]) }}">Elimina
                        fumetto</a>
                </div>
            </div>
        @endforeach
    </div>

    @dump($comics)
@endsection
