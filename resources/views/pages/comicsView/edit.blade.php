@extends('layouts.basic')

@section('title', 'Comics | Read Create')

@section('style')
    <style>
    </style>
@endsection

@section('main_content')
    <h1>edit di comics</h1>

    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">

        @csrf

        @method('PUT')

        <label for="title">Titolo:</label>
        <input type="text" id="title" name="title" placeholder="Title" value="{{ $comic->title }}">

        <label for="description">Descrizione:</label>
        <textarea id="description" name="description" placeholder="Description">{{ $comic->description }}</textarea>

        <label for="thumb">Link copertina:</label>
        <input type="text" id="thumb" name="thumb" placeholder="Thumb" value="{{ $comic->thumb }}">

        <label for="price">Prezzo</label>
        <input type="text" id="price" name="price" placeholder="Price" value="{{ $comic->price }}">

        <label for="series">Serie:</label>
        <input type="text" id="series" name="series" placeholder="Series" value="{{ $comic->series }}">

        <label for="sale_date">Disponibile dal</label>
        <input type="text" id="sale_date" name="sale_date" placeholder="AAAA-MM-DD" value="{{ $comic->sale_date }}">

        <label for="type">Genere</label>
        <input type="text" id="type" name="type" placeholder="Type" value="{{ $comic->type }}">

        <input type="submit" value="Invia">
    </form>
@endsection
