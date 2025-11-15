@extends('pages.layouts.master')
@section('konten')
    <h1>Produk Kami</h1>

    <container>
        <div class="alert alert-primary">
            <b>Nama Toko :{{$data_toko['nama_toko']}}</b>
            <b>Alamat :{{$data_toko['Alamat']}}</b>
            <b>Type :{{$data_toko['type']}}</b>
        </div>
        <br><br>
        <a href="/product/tambah" type="button" class="btn btn-primary">Tambah</a>
        <br><br>


        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_produk as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration  }}</th>
                                <td>{{ $item->nama_produk}}</td>
                                <td>{{ $item->harga}}</td>
                                <td>{{ $item->dekripsi}}</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button><button type="button"
                                        class="btn btn-warning">Warning</button></td>
                            </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </container>

@endsection