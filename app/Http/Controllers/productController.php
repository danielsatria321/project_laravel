<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function getProduct(){
        $datatoko=[
            'nama_toko'=>'Makmur Jaya Abadi',
            'Alamat'=>'Jl. Merdeka No. 123',
            'type'=>'Toko Sembako'
        ];
        return view('pages.product',$datatoko);
    }
    public function tambahProduct(){
        return view('pages.addProduct');
    }
   
}
