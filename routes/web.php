<?php

Route::get('/', function () {
    return view('pages/inicio');
});

Route::post('confMastermind','MastermindController@cargarJuego');

Route::get('volverJugar',function () {
    return view('pages/inicio');
});

Route::post('jugar','MastermindController@comprobarJuego');