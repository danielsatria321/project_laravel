@extends('pages.layouts.master');
@section('konten')

    <div class="container">
        <h1>Detail Produk</h1>
        <div class="card">
            <div class="card-body">
                <img src="https://placehold.co/600x400" alt="Gambar Produk" class="mb-3">
                <p>Nama produk'':{{$produk->nama_produk }}</p>
                <p>Harga:{{$produk->harga }}</p>
                <p>Deskripsi:{{$produk->deskripsi }}</p>
                <p>Kategori:{{$produk->kategori_id}}</p>
                <p>Stok:{{$produk->stok}}</p>
                <a href="/product" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>

@endsection