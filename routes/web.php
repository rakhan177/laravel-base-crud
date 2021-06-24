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

Route::get('/comics/{id}', 'ComicController@show')->name('comics.show');

//lo store si crea col post e salva i dati ricevuti creando un nuovo utente
Route::post('/comics', 'ComicController@store')->name('comics.store');

//nel create si mette il form per creare un utente
Route::get('/comics/create/ce', 'ComicController@create')->name('comics.create');
