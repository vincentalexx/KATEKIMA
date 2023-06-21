<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE ITEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/createPage.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #112B3C;">
        <div class="container">
            <a class="navbar-brand" href="{{ route('product.logistic') }}" >
                {{-- <img src="/asset/Versi Tulisan-Putih.png" alt="company-logo" width="253.75" height="50"> --}}
                <img src="/asset/Group 4.png" alt="company-logo" height="60">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('product.history')}}" >Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('product.logistic') }}">Logistik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.report')}}">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.logout') }}" >Logout</a>
                    </li>
                </ul>
                {{-- <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="asset/Profile.png" alt="Foto Profil" width="30" height="30">
                        </a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </nav>

    <form class="container d-flex header">
        <div class="container d-flex justify-content-between pt-4">
            <div>
                <a style="color: black; text-decoration: none;font-weight: 600" href="{{ route('product.logistic')}}"> < KEMBALI</a>
            </div>
            <div>
                <h5><b>Buat Produk Baru</b></h5>
            </div>
            <div>
                <a style="color: black; text-decoration: none;font-weight: 600; opacity:0%" > < KEMBALI</a>
            </div>
        </div>
    </form>

    <div class="form justify-content-center">
        <form class="container" action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div>
                <div class="tanggal">
                    <label>Tanggal :</label>
                    <input type="text" name="date" style="border: 0px solid black" readonly value="<?php echo date('y-m-d')?>"  >
                </div>
                <div class="form-group">
                    <label>Nama: </label>
                    <input type="text" name="name" placeholder="Masukkan nama barang" size="70%">
                </div>
                <div class="form-group">
                    <label>Deskripsi : </label>
                    <input type="text" name="description" placeholder="Masukkan deskripsi barang" size="70%">
                </div>
                <div class="form-group">
                    <label>Unit : </label>
                    <input type="text" name="unit" placeholder="Masukkan tipe unit" size="70%">
                </div>
                <div class="form-group">
                    <label>Kategori : </label>
                    <input type="text" name="category" placeholder="Masukkan kategori" size="70%">
                </div>
                <div class="form-group">
                    <label>Pilih gambar : </label>
                    <input type="file" name="image" placeholder="Pilih gambar">
                </div>
            </div>
            <div>
                <input class="form-group" type="submit" value="Simpan">
            </div>

        </form>
    </div>

</body>
</html>
