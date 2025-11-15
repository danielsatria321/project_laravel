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
        DB::table('tb_produk')->insert([
            [
                'nama_produk' => 'Produk A',
                'harga' => 10000,
                'deskripsi' => 'Deskripsi produk A',
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Produk A',
                'harga' => 10000,
                'deskripsi' => 'Deskripsi produk A',
                'kategori_id' => 1,
                 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                 'nama_produk' => 'Produk A',
                'harga' => 10000,
                'deskripsi' => 'Deskripsi produk A',
                'kategori_id' => 1,
                 'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
