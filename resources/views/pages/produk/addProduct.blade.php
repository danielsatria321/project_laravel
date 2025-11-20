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
        <div class="col-md-6 mb-3">
            <label for="exampleInputEmail1" class="form-label"> Stok</label>
            <input type="number" class="form-control" name="stok" value="{{ old('stok') }}" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @error('stok')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="col-md-6 mb-3">
            <label for="kategori_id" class="form-label"> Kategori</label>
            <select class="form-select" name="kategori_id" aria-label="Default select example">
                <option selected disabled>Pilih Kategori</option>
                @foreach ($data_kategori as $item)
                    <option value="{{ $item->id_kategori }}" {{ old('kategori_id') == $item->id_kategori ? 'selected' : '' }}>
                        {{ $item->nama_kategori }}
                    </option>
                @endforeach
            </select>
            @error('kategori_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Deskripsi</label>
            <textarea class="form-control" name="deskripsi_produk" placeholder="Deskripsi Produk" id="floatingTextarea2"
                style="height: 100px">{{ old('deskripsi_produk') }}</textarea>
            @error('deskripsi_produk')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection