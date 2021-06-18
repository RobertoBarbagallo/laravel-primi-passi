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
    return view('home', [
        "nome" => "Roberto",
        "cognome" => "Barbagallo",
    ]);
})->name("homepage");


Route::get('/about', function () {
    return view('about', [
        "nome" => "Roberto",
        "cognome" => "Barbagallo"
    ]);
})->name("about");

Route::get('/blog', function () {
    return view('blog', [
        "nome" => "Roberto",
        "cognome" => "Barbagallo"
    ]);
})->name("blog");

Route::get('/forum', function () {
    return view('forum', [
        "nome" => "Roberto",
        "cognome" => "Barbagallo"
    ]);
})->name("forum");

Route::get('/community', function () {
    return view('community', [
        "nome" => "Roberto",
        "cognome" => "Barbagallo"
    ]);
})->name("community");