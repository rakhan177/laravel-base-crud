<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('pageTitle')</title>
    {{-- inserisco il link che punta al css convertito di sass da blade tramite asset che punta
    direttamente alla cartella public/css  --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
  </head>
  <body>
    <div class="container">
      {{-- includo l' header con @include che punta alla cartella views --}}
      @include('partials.header')
      {{-- creo uno @yeld che è praticamente un segnaposto --}}
      @yield('bodyContent')
    </div>
  </body>


</html>
