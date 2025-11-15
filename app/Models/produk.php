<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //inisialisasi tabel
    protected $table="tb_produk";
    //inisialisasi primary key
    protected $primaryKey = 'id_produk';
    //inisialisasi data yang boleh diisi
    protected $fillable = ['nama_produk', 'harga', 'stok'];
//inisialisasi data yang tidak boleh diisi
    protected $guarded =['id_produk'];
}
