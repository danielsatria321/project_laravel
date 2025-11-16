@extends('pages.layouts.master');
@section('konten')
    <h1>Halaman Tambah Data</h1>

    <form action="/product" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1" class="form-label"> Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" id="exampleInputEmail1"
                    value=" {{ old('nama_produk') }}" aria-describedby="emailHelp">
                @error('nama_produk')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1" class="form-label"> Harga</label>
                <input type="number" class="form-control" name="harga" value="{{ old('harga') }}" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('harga')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Produk" id="floatingTextarea2" value={{ old('deskripsi') }} style="height: 100px"></textarea>
            @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection