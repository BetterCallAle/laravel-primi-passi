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
    $data = [
        "planetName" => "Terra",
        "pageNames" => ["home", "mars", "pluto"],
        "satellites" => ["Luna"]
    ];

    return view('index', $data);
})->name("home");


Route::get('/marte', function(){
    $planetName = "Marte";
    $pageNames = ["home", "mars", "pluto"];
    $satellites = ["Phobos", "Deimos"];
    return view('mars', compact("planetName", "satellites", "pageNames"));
})->name('mars');

Route::get("/plutone", function(){
    $data = [
        "planetName"=> "Plutone",
        "pageNames" => ["home", "mars", "pluto"],
        "satellites" => ["Caronte", "Stige", "Notte", "Cerbero", "Idra"]
    ];
    return view('pluto', $data);
})->name('pluto');