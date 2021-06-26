@extends('layout.basicLayout')
{{-- estendo la mia homepage con il layout di base con @extends --}}
{{-- inserisco il titolo, passato come secondo argomento --}}
@section('pageTitle', 'Modifica Fumetto')
{{-- mettiamo il segnaposto(yeld) del body per iniziare a scrivere --}}
@section('bodyContent')

<form action="{{route('comics.update', $comic->id)}}" method="post">
  @csrf
  {{-- update puo essere falo solo con metodi PUT o PATCH,ma il metodo della form puo essere solo post,
  quindi aggiungiamo questo tag per permettere a laravel di fare la chiamata --}}
  @method('PUT')
  {{-- il for della lable se ci clicco sopra mi evidenzia il campo relativo e lavora con id dell' input --}}
  <label for="title">Titolo</label>
  {{-- compiliamo il value per mostrare all' utente i campi compilati --}}
  <input type="text" name="title" id="title" value="{{$comic->title}}">

  <label for="description">Descrizione</label>
  <input type="text" name="description" id="description" value="{{$comic->description}}">

  <label for="thumb">src</label>
  <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">

  <label for="price">Prezzo</label>
  <input type="text" name="price" id="price" value="{{$comic->price}}">

  <label for="series">Serie</label>
  <input type="text" name="series" id="series" value="{{$comic->series}}">

  <label for="date">Data</label>
  <input type="text" name="date" id="date" value="{{$comic->date}}">

  <label for="type">Tipo</label>
  <input type="text" name="type" id="type" value="{{$comic->type}}">

  <input type="submit" value="Invia">
</form>

<div class="">
  <a href="{{route('comics.index')}}">HOME</a>
</div>

@endsection
