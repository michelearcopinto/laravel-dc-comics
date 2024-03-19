@extends('layouts.basic')

@section('title', 'Comics | Read Create')

@section('style')
    <style>
    </style>
@endsection

@section('main_content')
    <h1>create di comics</h1>

    <form action="{{ route('comics.store') }}" method="POST">

        @csrf

        <label for="title">Titolo:</label>
        <input type="text" id="title" name="title" placeholder="Title">

        <label for="description">Descrizione:</label>
        <textarea id="description" name="description" placeholder="Description"></textarea>

        <label for="thumb">Link copertina:</label>
        <input type="text" id="thumb" name="thumb" placeholder="Thumb">

        <label for="price">Prezzo</label>
        <input type="text" id="price" name="price" placeholder="Price">

        <label for="series">Serie:</label>
        <input type="text" id="series" name="series" placeholder="Series">

        <label for="sale_date">Disponibile dal</label>
        <input type="text" id="sale_date" name="sale_date" placeholder="AAAA-MM-DD">

        <label for="type">Genere</label>
        <input type="text" id="type" name="type" placeholder="Type">

        <input type="submit" value="Invia">
    </form>

@endsection
