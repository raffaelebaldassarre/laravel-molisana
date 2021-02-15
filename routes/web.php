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
    return view('home');
})->name('home');

Route::get('prodotti', function () {
    $pasta = json_decode(config('data.pasta'),true);
    return view('prodotti', compact('pasta'));
})->name('prodotti');

Route::get('prodotti/{key}', function ($key) {
    $pasta = json_decode(config('data.pasta'),true);
    // dd($key > count($pasta) - 1);
    if($key > count($pasta) - 1){
        abort(404);
    }else{
    $prodotto = $pasta[$key];
    return view('prodotto', compact('prodotto'));
    }
})->name('prodotto');

Route::get('contatti', function () {
    return view('contatti');
})->name('contatti');