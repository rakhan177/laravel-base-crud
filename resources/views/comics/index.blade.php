@extends('layout.basicLayout')
{{-- estendo la mia homepage con il layout di base con @extends --}}
{{-- inserisco il titolo, passato come secondo argomento --}}
@section('pageTitle', 'Elenco Fumetti')
{{-- mettiamo il segnaposto(yeld) del body per iniziare a scrivere --}}
@section('bodyContent')

@dump($comics)
@endsection
