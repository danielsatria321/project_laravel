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
Route::delete('product/{id}',[productController::class,'deleteData']);
Route::put('product/{id}',[productController::class,'updateOperation']);
Route::view('/beranda','pages.beranda');
Route::view('/contact','pages.contact');
Route::get('/product',[productController::class,'index']);
Route::get('/product/create',[productController::class,'create']);//halaman form data
Route::post('/product',[productController::class,'store']);//menyimpan data dari form
Route::get('/product/{id}', [productController::class,'showDetail']);
Route::get('product/{id}/updateData',[productController::class,'updateData']);



