@extends('pages.layouts.master');
@section('konten')
    <h1>Halaman Tambah Data</h1>

    <form action="/kategori" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="exampleInputEmail1" class="form-label"> Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kategori" id="exampleInputEmail1"
                    value=" {{ old('nama_kategori') }}" aria-describedby="emailHelp">
                @error('nama_produk')
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