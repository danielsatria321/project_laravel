@extends('pages.layouts.master')
@section('konten')

    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0">Detail Produk</h1>
            <a href="/product" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-md-5 mb-4 mb-md-0">
                        <div class="bg-light rounded p-3 text-center">
                            <img src="https://placehold.co/600x400" alt="Gambar Produk" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="product-details">
                            <div class="mb-3">
                                <span class="badge bg-primary mb-2">Produk</span>
                                <h2 class="h4">{{$produk->nama_produk}}</h2>
                            </div>

                            <div class="mb-3">
                                <h4 class="text-primary fw-bold">Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>
                            </div>

                            <div class="mb-3">
                                <p class="mb-1"><strong>Deskripsi:</strong></p>
                                <p class="text-muted">{{$produk->deskripsi}}</p>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <p class="mb-1"><strong>Kategori:</strong></p>
                                    <span class="badge bg-secondary">{{$produk->kategori_id}}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            border-radius: 10px;
        }

        .product-details h2 {
            color: #333;
        }

        .badge {
            font-size: 0.8rem;
            padding: 0.4rem 0.8rem;
        }
    </style>

@endsection