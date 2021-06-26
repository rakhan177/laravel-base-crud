@extends('layout.basicLayout')
{{-- estendo la mia homepage con il layout di base con @extends --}}
{{-- inserisco il titolo, passato come secondo argomento --}}
@section('pageTitle', 'Fumetto')
{{-- mettiamo il segnaposto(yeld) del body per iniziare a scrivere --}}
@section('bodyContent')

  <div class="">
    Titolo: {{$comic->title}}
  </div>

  <div class="">
    Descrizione: {{$comic->description}}
  </div>

  <div class="">
    src: {{$comic->thumb}}
  </div>

  <div class="">
    Price: {{$comic->price}}
  </div>

  <div class="">
    Serie: {{$comic->series}}
  </div>

  <div class="">
    Data: {{$comic->date}}
  </div>

  <div class="">
    Tipo: {{$comic->type}}
  </div>

  <div class="">
    <a href="{{route('comics.index')}}">HOME</a>
  </div>

  <div class="">
    <a href="{{ route('comics.edit', $comic->id) }}">MODIFICA</a>
  </div>

  @include('partials.components.deleteBtn', ["comic"=>$comic])
{{-- @dump($comic) --}}
@endsection
