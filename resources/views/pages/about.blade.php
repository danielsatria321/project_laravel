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
    <!-- Header Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="display-4 fw-bold">Tentang Profiltokoku</h1>
                    <p class="lead">Menghadirkan produk berkualitas dengan pelayanan terbaik sejak 2015</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sejarah Perusahaan -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Sejarah Kami</h2>
                    <p class="mb-4">Profiltokoku didirikan pada tahun 2015 dengan visi sederhana namun kuat: menyediakan
                        akses mudah bagi masyarakat Indonesia untuk mendapatkan produk berkualitas dengan harga terjangkau
                        melalui platform online.</p>
                    <p class="mb-4">Dari awal yang sederhana dengan hanya 10 produk dan 1 gudang kecil, kami telah
                        berkembang menjadi salah satu toko online terpercaya dengan lebih dari 1.000 produk dan melayani
                        ribuan pelanggan di seluruh Indonesia.</p>
                    <p>Perjalanan kami tidak selalu mulus, tetapi dengan komitmen pada kualitas dan kepuasan pelanggan, kami
                        terus tumbuh dan berkembang hingga saat ini.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://picsum.photos/600/400?random=1" alt="Sejarah Profiltokoku"
                        class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="fw-bold">Visi & Misi</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card border-0 bg-white shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="bg-primary text-white rounded-circle p-3 mx-auto mb-3"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-bullseye fa-2x"></i>
                            </div>
                            <h4 class="card-title">Visi</h4>
                            <p class="card-text">Menjadi platform e-commerce terdepan yang menghubungkan produsen
                                berkualitas dengan konsumen di seluruh Indonesia, menciptakan pengalaman berbelanja online
                                yang mudah, aman, dan menyenangkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card border-0 bg-white shadow-sm h-100">
                        <div class="card-body p-4 text-center">
                            <div class="bg-success text-white rounded-circle p-3 mx-auto mb-3"
                                style="width: 80px; height: 80px;">
                                <i class="fas fa-tasks fa-2x"></i>
                            </div>
                            <h4 class="card-title">Misi</h4>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Menyediakan produk
                                    berkualitas dengan harga kompetitif</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Memberikan pengalaman
                                    berbelanja online yang mudah dan aman</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Mendukung UMKM lokal dengan
                                    menjadi platform penjualan mereka</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Memberikan layanan pelanggan
                                    yang responsif dan profesional</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Terus berinovasi dalam teknologi untuk
                                    meningkatkan layanan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nilai Perusahaan -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="fw-bold">Nilai-Nilai Kami</h2>
                    <p class="text-muted">Prinsip yang menjadi panduan dalam setiap keputusan dan tindakan kami</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 text-center h-100">
                        <div class="card-body">
                            <div class="bg-warning text-white rounded-circle p-3 mx-auto mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-handshake fa-2x"></i>
                            </div>
                            <h4>Integritas</h4>
                            <p>Kami selalu jujur dan transparan dalam setiap aspek bisnis, mulai dari deskripsi produk
                                hingga kebijakan pengembalian.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 text-center h-100">
                        <div class="card-body">
                            <div class="bg-info text-white rounded-circle p-3 mx-auto mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <h4>Fokus pada Pelanggan</h4>
                            <p>Kepuasan pelanggan adalah prioritas utama kami. Kami selalu mendengarkan dan merespons
                                kebutuhan mereka.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 text-center h-100">
                        <div class="card-body">
                            <div class="bg-success text-white rounded-circle p-3 mx-auto mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="fas fa-rocket fa-2x"></i>
                            </div>
                            <h4>Inovasi</h4>
                            <p>Kami terus berinovasi dalam layanan dan teknologi untuk memberikan pengalaman berbelanja yang
                                lebih baik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pencapaian -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="fw-bold">Pencapaian Kami</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4">
                    <div class="counter">
                        <h2 class="display-4 fw-bold">8+</h2>
                        <p>Tahun Pengalaman</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="counter">
                        <h2 class="display-4 fw-bold">50.000+</h2>
                        <p>Pelanggan Bahagia</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="counter">
                        <h2 class="display-4 fw-bold">1.000+</h2>
                        <p>Produk Tersedia</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="counter">
                        <h2 class="display-4 fw-bold">98%</h2>
                        <p>Rating Positif</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tim -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="fw-bold">Tim Kami</h2>
                    <p class="text-muted">Orang-orang di balik kesuksesan Profiltokoku</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 text-center shadow-sm">
                        <img src="https://i.pravatar.cc/400?img=12" class="card-img-top" alt="Founder">
                        <div class="card-body">
                            <h5 class="card-title">Ahmad Wijaya</h5>
                            <p class="card-text text-muted">Founder & CEO</p>
                            <p class="card-text">"Kami percaya bahwa setiap pelanggan layak mendapatkan produk terbaik
                                dengan pelayanan terbaik."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 text-center shadow-sm">
                        <img src="https://i.pravatar.cc/400?img=5" class="card-img-top" alt="Manager">
                        <div class="card-body">
                            <h5 class="card-title">Sari Dewi</h5>
                            <p class="card-text text-muted">Operational Manager</p>
                            <p class="card-text">"Kami memastikan setiap pesanan diproses dengan cepat dan dikirim dengan
                                aman kepada pelanggan."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 text-center shadow-sm">
                        <img src="https://i.pravatar.cc/400?img=9" class="card-img-top" alt="Customer Service">
                        <div class="card-body">
                            <h5 class="card-title">Budi Santoso</h5>
                            <p class="card-text text-muted">Customer Service Lead</p>
                            <p class="card-text">"Kepuasan pelanggan adalah prioritas kami. Kami siap membantu 24/7 untuk
                                pertanyaan dan keluhan."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Komitmen -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-4">Komitmen Kami</h2>
                    <p class="mb-4">Di Profiltokoku, kami tidak hanya menjual produk - kami membangun hubungan kepercayaan
                        dengan pelanggan. Setiap produk yang kami tawarkan telah melalui proses seleksi ketat untuk
                        memastikan kualitas terbaik.</p>
                    <p class="mb-4">Kami berkomitmen untuk terus meningkatkan layanan, memperluas jangkauan produk, dan
                        memberikan pengalaman berbelanja online yang menyenangkan bagi semua pelanggan.</p>
                    <p>Terima kasih telah mempercayai Profiltokoku sebagai mitra belanja online Anda. Kami berjanji untuk
                        terus memberikan yang terbaik.</p>
                </div>
            </div>
        </div>
    </section>

    <style>
        .counter h2 {
            font-weight: 700;
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