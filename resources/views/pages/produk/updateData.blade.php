<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: linear-gradient(135deg, #6c5ce7, #a29bfe);
            color: white;
            border-radius: 15px 15px 0 0 !important;
            padding: 1.5rem;
        }

        .form-control,
        .form-control:focus {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
        }

        .form-control:focus {
            border-color: #6c5ce7;
            box-shadow: 0 0 0 0.2rem rgba(108, 92, 231, 0.25);
        }

        .btn-primary {
            background: linear-gradient(135deg, #6c5ce7, #a29bfe);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #5b4cd6, #8f7dfe);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(108, 92, 231, 0.3);
        }

        .alert-danger {
            border-radius: 10px;
            padding: 10px 15px;
            margin-top: 5px;
        }

        .form-label {
            font-weight: 600;
            color: #4a4a4a;
            margin-bottom: 8px;
        }

        .back-btn {
            background-color: #f8f9fa;
            color: #6c5ce7;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
        }

        .back-btn:hover {
            background-color: #e9ecef;
            color: #5b4cd6;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Update Data Produk</h2>
                    </div>
                    <div class="card-body p-4">
                        <form action="/product/{{$dataProduk->id_produk}}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i
                                                class="bi bi-box-seam text-primary"></i></span>
                                        <input type="text" class="form-control" name="nama_produk" id="nama_produk"
                                            value="{{ $dataProduk->nama_produk }}" placeholder="Masukkan nama produk">
                                    </div>
                                    @error('nama_produk')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="harga" class="form-label">Harga</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i
                                                class="bi bi-currency-dollar text-success"></i></span>
                                        <input type="number" class="form-control" name="harga" id="harga"
                                            value="{{ $dataProduk->harga }}" placeholder="Masukkan harga produk">
                                    </div>
                                    @error('harga')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light align-items-start pt-2"><i
                                            class="bi bi-text-paragraph text-info"></i></span>
                                    <textarea class="form-control" name="deskripsi" id="deskripsi"
                                        placeholder="Masukkan deskripsi produk"
                                        style="height: 120px">{{ $dataProduk->deskripsi }}</textarea>
                                </div>
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="#" class="back-btn">
                                    <i class="bi bi-arrow-left me-1"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-check-lg me-1"></i> Update Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>