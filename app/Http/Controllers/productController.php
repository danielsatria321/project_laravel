<?php

namespace App\Http\Controllers;
use App\Models\produk;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        $datatoko=[
            'nama_toko'=>'Makmur Jaya Abadi',
            'Alamat'=>'Jl. Merdeka No. 123',
            'type'=>'Toko Sembako'
        ];
        $produk = produk::get();
        // $queryBuilder = DB::table('tb_produk')->get();
        
        return view('pages.produk.pshow',['data_toko'=>$datatoko,'data_produk'=>$produk]);
    }
    public function tambahProduct(){
        return view('pages.addProduct');
    }
   
}
