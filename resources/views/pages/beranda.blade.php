@extends('pages.layouts.master')

@section('styles')
    <style>
        .main-content {
            padding: 0 !important;
        }

        .content-card {
            border-radius: 0 !important;
            box-shadow: none !important;
        }

        .content-card .card-body {
            padding: 0 !important;
        }

        section {
            position: relative;
            z-index: 1 !important;
        }
    </style>
@endsection

@section('konten')
    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Selamat Datang di Profiltokoku</h1>
                    <p class="lead mb-4">Toko online terpercaya dengan berbagai produk berkualitas dan harga terjangkau.
                        Temukan kebutuhan Anda di sini!</p>
                    <a href="#produk" class="btn btn-light btn-lg me-3">Belanja Sekarang</a>
                    <a href="#tentang" class="btn btn-outline-light btn-lg">Tentang Kami</a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=600&h=400&fit=crop"
                        alt="Hero Image" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>




    <!-- Kategori Produk -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="fw-bold">Kategori Produk</h2>
                    <p class="text-muted">Jelajahi berbagai kategori produk kami</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card text-center border-0 bg-white shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="bg-primary text-white rounded-circle p-3 mx-auto mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-mobile-alt fa-2x"></i>
                            </div>
                            <h5 class="card-title">Elektronik</h5>
                            <p class="card-text text-muted">Smartphone, laptop, dan gadget lainnya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card text-center border-0 bg-white shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="bg-success text-white rounded-circle p-3 mx-auto mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-tshirt fa-2x"></i>
                            </div>
                            <h5 class="card-title">Fashion</h5>
                            <p class="card-text text-muted">Pakaian, aksesoris, dan sepatu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card text-center border-0 bg-white shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="bg-warning text-white rounded-circle p-3 mx-auto mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-home fa-2x"></i>
                            </div>
                            <h5 class="card-title">Perabotan</h5>
                            <p class="card-text text-muted">Furnitur dan dekorasi rumah</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card text-center border-0 bg-white shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="bg-info text-white rounded-circle p-3 mx-auto mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-utensils fa-2x"></i>
                            </div>
                            <h5 class="card-title">Makanan</h5>
                            <p class="card-text text-muted">Makanan ringan dan bahan masakan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://placehold.co/600x400?text=Tentang+Kami" alt="Tentang Kami"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Tentang Profiltokoku</h2>
                    <p class="mb-4">Profiltokoku adalah toko online terpercaya yang telah melayani pelanggan sejak 2015.
                        Kami berkomitmen untuk menyediakan produk berkualitas dengan harga terjangkau.</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Produk Berkualitas</h5>
                                    <p class="text-muted mb-0">Semua produk kami melalui proses seleksi ketat</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-shipping-fast fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Pengiriman Cepat</h5>
                                    <p class="text-muted mb-0">Pesanan dikirim dalam waktu 24 jam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-headset fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Layanan 24/7</h5>
                                    <p class="text-muted mb-0">Customer service siap membantu kapan saja</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-undo-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Garansi Kepuasan</h5>
                                    <p class="text-muted mb-0">Garansi pengembalian 30 hari</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="fw-bold">Testimoni Pelanggan</h2>
                    <p class="text-muted">Apa kata pelanggan tentang kami</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 bg-white shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">"Barang sesuai deskripsi, pengiriman cepat, dan packing rapi. Sangat puas
                                berbelanja di Profiltokoku!"</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="https://i.pravatar.cc/60?img=12" alt="Pelanggan" class="rounded-circle me-3">
                                <div>
                                    <h6 class="mb-0">Budi Santoso</h6>
                                    <small class="text-muted">Jakarta</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 bg-white shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="card-text">"Harga kompetitif dan kualitas produk terjamin. Sudah beberapa kali belanja
                                di sini dan selalu puas."</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="https://i.pravatar.cc/60?img=5" alt="Pelanggan" class="rounded-circle me-3">
                                <div>
                                    <h6 class="mb-0">Sari Indah</h6>
                                    <small class="text-muted">Bandung</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 bg-white shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="text-warning mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">"Pelayanan customer service sangat ramah dan responsif. Pengiriman tepat
                                waktu sesuai janji. Recommended!"</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="https://i.pravatar.cc/60?img=8" alt="Pelanggan" class="rounded-circle me-3">
                                <div>
                                    <h6 class="mb-0">Ahmad Rizki</h6>
                                    <small class="text-muted">Surabaya</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .hero-section {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        }

        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .rounded-circle {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <!-- Bootstrap JS dan dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
@endsection