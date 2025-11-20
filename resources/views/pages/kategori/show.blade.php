@extends('pages.layouts.master')
@section('konten')
    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Daftar Kategori</h1>
                    <p class="lead mb-4">Toko online terpercaya dengan berbagai produk berkualitas dan harga terjangkau.
                        Temukan kebutuhan Anda di sini!</p>
                    <a href="#produk" class="btn btn-light btn-lg me-3">Belanja Sekarang</a>
                    <a href="#tentang" class="btn btn-outline-light btn-lg">Tentang Kami</a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://placehold.co/600x400/ffffff/007bff?text=PROFILTOKOKU" alt="Hero Image"
                        class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>
    <a href="/kategori/create" class="btn btn-primary mb-3">Tambah</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kategori as $item)
                <tr>

                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->nama_kategori}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td>
                        <button class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#hapus{{$item->id_produk }}">
                            Hapus
                        </button>

                    </td>
                    </th>
                </tr>

            @empty
                <tr>
                    <td colspan="4" class="text-center">Data Kosong</td>
                </tr>

            @endforelse

        </tbody>
    </table>
    <div class="modal-dialog">
        <form action="/kategori/{{ $item->id_produk}}" class="modal-content" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin Hapus ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Hapus data {{$item->nama_produk}} ?

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Hapus Data</button>
            </div>
        </form>
    </div>



@endsection