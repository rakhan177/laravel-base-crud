<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importo il model
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // prendo tutti i dati dal model e li salvo in variabile
        $comics = Comic::all();

        return view('comics.index', [
          "comics" => $comics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //nel create mostriamo il form per la compilazione dei prodotti
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newComicData = $request->all();

        $newComic = new Comic();
        $newComic->title = $newComicData['title'];
        $newComic->description = $newComicData['description'];
        $newComic->thumb = $newComicData['thumb'];
        $newComic->price = $newComicData['price'];
        $newComic->series = $newComicData['series'];
        $newComic->date = $newComicData['date'];
        $newComic->type = $newComicData['type'];

        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //nello Show visualizziamo i singoli fumetti, utilizzando id
        $comic = Comic::findOrFail($id);

        return view("comics.show", [
          "comic" => $comic,
          // "id" => $id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // passiamo l' oggetto richiesto con id
        $comic = Comic::find($id);

        // se un utente prova ad accedere ad un contenuto inesistente riportiamo un errore 404
        // var_dump($comic);
        if(is_null($comic)){
          abort(404);
        }
        // oppure usiamo il metodo findOrFail al posto di find
        // $comic = Comic::findOrFail($id);

        //prende l' id dell' oggetto e ce lo mostra
        return view("comics.edit", [
          "comic" => $comic
        ]);
        // edit rimanda a update con metodo put per salvare i dati
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update si compone di update e edit
        $comic = Comic::find($id);
        // salvo i dati passati all edit
        $editData = $request->all();
        ;
        // aggiorno i dati conupdate e salva automaticamente, per usare update devo
        // implementare fillable dentro al model
        $comic->update($editData);

        return redirect()->route("comics.show", $id);

        // posso anche salvare solo i dati che mi interessano:
        // $comic->title = $editData['title'];
        // $comic->date = $editData['date'];
        // se usiamo questo medtodo dobbiamo salvare con:
        // $comic->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // recuperiamo l' oggetto
        $comic = Comic::findOrFail($id);
        // cancelliamolo e salviamo con metodo delete()
        $comic->delete();
        // reindirizziamo l' utente
        return redirect()->route("comics.index");
    }
}
