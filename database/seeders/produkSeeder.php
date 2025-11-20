<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table("tb_kategori")->insert([
            [
                "nama_kategori" => "Elektronik",
                "deskripsi" => "Kategori untuk produk elektronik",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nama_kategori" => "Pakaian",
                "deskripsi" => "Kategori untuk produk pakaian",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
        DB::table('tb_produk')->insert([
            [
                'kode_produk' => 'P001',
                'nama_produk' => 'A001',
                'harga' => 10000,
                'deskripsi_produk' => 'Deskripsi produk A',
                'stok' => 50,
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_produk' => 'P002',
                'nama_produk' => 'A002',
                'harga' => 10042,
                'deskripsi_produk' => 'Deskripsi produk B',
                'stok' => 53,
                'kategori_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
        ]);
    }
}
