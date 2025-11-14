<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about',[
        'name' => 'Daya',
        'email' => 'Dans']);
});

Route::view('/beranda','pages.beranda');
Route::view('/contact','pages.contact');


