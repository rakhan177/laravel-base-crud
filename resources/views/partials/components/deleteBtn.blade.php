{{-- creiamo il form per il destroy e andiamo ad includerlo nelle pagine interessate con @include --}}
<form action="{{route('comics.destroy', $comic->id)}}" method="post">
  @csrf
  {{-- aggiungiamo il metodo delete --}}
  @method('DELETE')
  <input type="submit" name="" value="Cancella">
</form>
