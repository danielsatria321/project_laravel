@extends('pages.layouts.master')
@section('konten')

    <div class="container">
        <h1>Produk Kami</h1>

        <div class="alert alert-primary">
            <b>Nama Toko :{{$data_toko['nama_toko']}}</b>
            <b>Alamat :{{$data_toko['Alamat']}}</b>
            <b>Type :{{$data_toko['type']}}</b>
        </div>
        <br><br>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif
        <a href="/product/create" type="button" class="btn btn-primary">Tambah</a>
        @if (request()->keyword)
            <a href="/product" class="btn btn-info">reset
            </a>
        @endif

        <br><br>



        <div class="card">
            <form class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Masukkan nama" aria-label="Cari Data"
                    aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
            </form>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data_produk as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration }}</th>
                                <td>{{ $item->nama_produk}}</td>
                                <td>{{ $item->harga}}</td>
                                <td>{{ $item->deskripsi}}</td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#hapus{{$item->id_produk }}">
                                        Hapus
                                    </button>


                                    <a href="/product/{{$item->id_produk}}/updateData" class="btn btn-warning">Update</a>
                                    <a href="/product/{{$item->id_produk}}" class="btn btn-success">Lihat Detail</a>
                                </td>
                                </td>
                        @empty
                                <tr>
                                    <td colspan="5" class="text-center">Data Tidak Tersedia</td>
                                </tr>

                            @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @foreach ($data_produk as $item)
        <div class="modal fade" id="hapus{{$item->id_produk}}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form action="/product/{{ $item->id_produk}}" class="modal-content" method="POST">
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
        </div>
        </div>
    @endforeach

@endsection