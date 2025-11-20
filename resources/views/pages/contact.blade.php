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
    </style>
@endsection

@section('konten')
    <!-- Hero Section -->
    <section class="bg-primary text-white py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Hubungi Kami</h1>
                    <p class="lead mb-4">Punya pertanyaan atau butuh bantuan? Tim kami siap membantu Anda!</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=500&h=350&fit=crop"
                        alt="Contact" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-7 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4">Kirim Pesan</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="nama@email.com">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subjek" class="form-label">Subjek</label>
                                <input type="text" class="form-control" id="subjek" placeholder="Subjek pesan">
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="pesan" rows="5"
                                    placeholder="Tulis pesan Anda di sini..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4">Informasi Kontak</h3>

                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <i class="bi bi-geo-alt-fill text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Alamat</h6>
                                <p class="text-muted mb-0">Jl. Merdeka No. 123<br>Jakarta Pusat, 10110</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <i class="bi bi-telephone-fill text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Telepon</h6>
                                <p class="text-muted mb-0">+62 21 1234 5678</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                                <i class="bi bi-envelope-fill text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Email</h6>
                                <p class="text-muted mb-0">info@tokoku.com</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="bi bi-clock-fill text-primary fs-4"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Jam Operasional</h6>
                                <p class="text-muted mb-0">Senin - Jumat: 09.00 - 17.00<br>Sabtu: 09.00 - 13.00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 text-center">
                        <h5 class="card-title mb-3">Ikuti Kami</h5>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-outline-primary btn-lg"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-outline-info btn-lg"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="btn btn-outline-danger btn-lg"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="btn btn-outline-success btn-lg"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="container-fluid mb-5 px-0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613!3d-6.1753924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonas!5e0!3m2!1sid!2sid!4v1234567890"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
@endsection