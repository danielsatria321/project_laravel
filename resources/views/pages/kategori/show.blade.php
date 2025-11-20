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
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>

    @endif
    <a href="/kategori/create" class="btn btn-primary mb-3">Tambah</a>
    <form class="input-group mb-3">
        <input type="text" class="form-control" name="caribos" placeholder="Masukkan nama" aria-label="Cari Data"
            aria-describedby="button-addon2" value="{{ request()->caribos }}">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
    </form>
    @if (request()->caribos)
        <a href="/kategori" class="btn btn-info">reset
        </a>
    @endif

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
                        <a href="/kategori/{{ $item->id_kategori }}/edit" class="btn btn-warning">Edit</a>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#hapus/{{ $item->id_kategori }}">
                            Hapus
                        </button>


                        @foreach ($kategori as $item)


                            <div class="modal fade" id="hapus/{{ $item->id_kategori }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="/kategori/{{ $item->id_kategori }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Kategori</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin menghapus {{ $item->nama_kategori }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach


                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="4" class="text-center">Data Kosong</td>
                </tr>

            @endforelse

        </tbody>
    </table>



@endsection