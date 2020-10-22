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
})->name("Home");

Route::get('/prodotti', function () {
    return view('prodotti');
})->name("prodotti");

Route::get('/news', function () {
    return view('news');
})->name("News");

Route::get('/prodotto/show/{id}', function ($id) {
    $data = config("pasta.$id");
    if($data == null) {
        abort(404);
    }
    return view('prodotto_singolo', ["pasta" => $data, "id" => $id]);
})->name("show");
