<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homePage');
});

Route::get('/comics', 'ComicController@index')->name('comics.index');

//lo store si crea col post e salva i dati ricevuti creando un nuovo utente
Route::post('/comics', 'ComicController@store')->name('comics.store');

//nel create si mette il form per creare un utente
Route::get('/comics/create', 'ComicController@create')->name('comics.create');

// le rotte dinamiche vanno messe alla fine per non andare in conflitto con le altre
Route::get('/comics/{id}', 'ComicController@show')->name('comics.show');

// salva i dati modificati di un oggetto, update deve funzionare si con put che con patch,
// per farlo usiamo match al quale passiamo un array con i metodi, il put si usa per
// modificare tutto, il patch per una sola parte
Route::match(["PUT", "PATCH"], '/comics/{id}', 'ComicController@update')->name('comics.update');

// elimina utente specificato
Route::delete('/comics/{id}', 'ComicController@destroy')->name('comics.destroy');

// creo la rotta per editare gli oggetti
Route::get('/comics/{id}/edit', 'ComicController@edit')->name('comics.edit');
