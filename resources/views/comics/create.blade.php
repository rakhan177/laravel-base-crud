@extends('layout.basicLayout')
{{-- estendo la mia homepage con il layout di base con @extends --}}
{{-- inserisco il titolo, passato come secondo argomento --}}
@section('pageTitle', 'Crea Fumetto')
{{-- mettiamo il segnaposto(yeld) del body per iniziare a scrivere --}}
@section('bodyContent')

{{-- nell action mettiamo a dove punta la create una volta fatto il submite --}}
<form action="{{ route('comics.store')}}" method="post">
  @csrf
  <label for="title">Titolo</label>
  <input type="text" name="title" value="">

  <label for="description">Descrizione</label>
  <input type="text" name="description" value="">

  <label for="thumb">src</label>
  <input type="text" name="thumb" value="">

  <label for="price">Prezzo</label>
  <input type="text" name="price" value="">

  <label for="series">Serie</label>
  <input type="text" name="series" value="">

  <label for="date">Data</label>
  <input type="text" name="date" value="">

  <label for="type">Tipo</label>
  <input type="text" name="type" value="">

  <input type="submit" value="Invia">
</form>
<div class="">
  <a href="{{route('comics.index')}}">HOME</a>
</div>
@endsection
