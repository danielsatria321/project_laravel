<?php

use App\Http\Controllers\productController;
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
Route::get('/product',[productController::class,'index']);
Route::get('/product/tambah',[productController::class,'tambahProduct']);

