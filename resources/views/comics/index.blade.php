@extends('layout.basicLayout')
{{-- estendo la mia homepage con il layout di base con @extends --}}
{{-- inserisco il titolo, passato come secondo argomento --}}
@section('pageTitle', 'Elenco Fumetti')
{{-- mettiamo il segnaposto(yeld) del body per iniziare a scrivere --}}
@section('bodyContent')

@dump($comics)

@foreach($comics as $comic)

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
    Tipo: {{$comic->id}}
  </div>

  <div class="">
    <a href="{{ route('comics.create', $comic->id) }}">CREA</a>
  </div>

  <div class="">
    <a href="{{ route('comics.show', $comic->id) }}">VISUALIZZA</a>
  </div>

  <div class="">
    <a href="{{ route('comics.edit', $comic->id) }}">MODIFICA</a>
  </div>

  {{-- il metodo delete si deve appoggiare ad un form con un buttun che fa una submit con metodo delete --}}
  {{-- come secondo argomento passiamo id --}}
  @include('partials.components.deleteBtn', ["comic"=>$comic])
@endforeach

@endsection
