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
    return view('index');
})->name("home");


Route::get('/marte', function(){
    $planetName = "Marte";
    $pageName = "mars";
    $satellites = ["Phobos", "Deimos"];
    return view('mars', compact("satellites", "planetName"));
})->name('mars');

Route::get("/plutone", function(){
    $data = [
        "planetName"=> "Plutone",
        "pageName" => "pluto",
        "satellites" => ["Caronte", "Stige", "Notte", "Cerbero", "Idra"]
    ];
    return view('pluto', $data);
})->name('pluto');