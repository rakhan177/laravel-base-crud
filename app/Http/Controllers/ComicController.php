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
        $comic = Comic::find($id);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
