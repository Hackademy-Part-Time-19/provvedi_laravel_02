<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('Homepage',['titoloblog' =>'pagina principale']);
})->name("home");


Route::get('/articoli', function () {
    
    $articoli = [['titolo'=> 'Berserk', 'categoria'=> 'Dark Fantasy', 'descrizione'=> 'manga che ha fatto la storia'],
                 ['titolo'=> 'Hunter x Hunter', 'categoria'=> 'shonen', 'descrizione'=> 'manga con combattimenti in stile arti marziali'],
                 ['titolo'=> 'One Punch Man', 'categoria'=> 'shonen parody', 'descrizione'=> 'manga parodia degli shonen'],
                 ['titolo'=> 'Haikyuu!', 'categoria'=> 'Sport', 'descrizione'=> 'manga incentrato sulla pallavolo'],
                 ['titolo'=> 'Monster', 'categoria'=> 'Dark Mistery', 'descrizione'=> 'capolavoro come pochi'],];
                 
    
    return view('Articoli',['articoli'=>$articoli]);
})->name("articoli");


Route::get('/chisiamo', function () {
    return view('Chi siamo');
})->name ("info");


Route::get('/articolo/{id}', function($id){

    $articoli = [['titolo'=> 'Berserk', 'categoria'=> 'Dark Fantasy', 'descrizione'=> 'manga che ha fatto la storia'],
    ['titolo'=> 'Hunter x Hunter', 'categoria'=> 'shonen', 'descrizione'=> 'manga con combattimenti in stile arti marziali'],
    ['titolo'=> 'One Punch Man', 'categoria'=> 'shonen parody', 'descrizione'=> 'manga parodia degli shonen'],
    ['titolo'=> 'Haikyuu!', 'categoria'=> 'Sport', 'descrizione'=> 'manga incentrato sulla pallavolo'],
    ['titolo'=> 'Monster', 'categoria'=> 'Dark Mistery', 'descrizione'=> 'capolavoro come pochi'],];
    
    return view('Articolodescrizione',['articolo'=>$articoli[$id]]);
})-> name("Articoli.Articolidescrizione");