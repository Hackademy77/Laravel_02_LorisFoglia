<?php

use App\Http\Controllers\MioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// ESERCIZIO LARAVEL - NAMED ROUTES E ROTTE PARAMETRICHE
// Realizzare con Laravel un sito di annunci con due viste principali:
// Homepage
// Elenco di prodotti
// Nella pagina di elenco prodotti realizzare delle card che portino ad una pagina di dettaglio prodotto attraverso una rotta parametrica

// Scrivere il Recap


Route::get('/', function () {
    return view('welcome');
});


Route::get('/prodotti', [MioController::class, 'mostraProdotti'])->name('offerte');


Route::get('/prodotto/{id}', [MioController::class, 'mostraProdotto'])->name('prodotto.show');
