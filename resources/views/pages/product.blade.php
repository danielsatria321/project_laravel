@extends('pages.layouts.master')
@section('konten')
    <h1>Produk Kami</h1>

    <container>
        <div class="alert alert-primary">
            <b>Nama Toko :{{$nama_toko}}</b>
            <b>Alamat :{{$Alamat}}</b>
            <b>Type :{{$type}}</b>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td><button type="button" class="btn btn-danger">Hapus</button><button type="button"
                                    class="btn btn-warning">Warning</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td><button type="button" class="btn btn-danger">Hapus</button><button type="button"
                                    class="btn btn-warning">Warning</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td><button type="button" class="btn btn-danger">Hapus</button><button type="button"
                                    class="btn btn-warning">Warning</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </container>

@endsection