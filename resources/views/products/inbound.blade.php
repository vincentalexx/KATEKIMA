<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INBOUND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/inbound.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #112B3C;">
        <div class="container">
            <a class="navbar-brand" href="{{ route('product.logistic') }}">
                {{-- <img src="asset/Versi Tulisan-Putih.png" alt="company-logo" width="253.75" height="50"> --}}
                <img src="asset/Group 4.png" alt="company-logo" height="60">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.history')}}">Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('product.logistic') }}">Logistik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.report')}}">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"href="{{ route('user.logout') }}">Logout</a>
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

    <div class="facture container d-flex justify-content-between pt-4">
        <div>
            <a href="{{ route('product.logistic')}}" style="color: black; text-decoration: none;font-weight: 600"> < KEMBALI</a>
        </div>
        <div>
            <h5><b>Barang Masuk</b></h5>
        </div>
        <div>
            <a style="color: white; text-decoration: none;font-weight: 600"> < KEMBALI</a>
        </div>
    </div>

    <hr class="container">
    <form action="{{ route('product.add') }}" method="POST">
        @csrf
        <!-- <div style="display:flex; width:100%; justify-content:space-between"> -->
        <div>
            <div class="container tanggal">
                <label>Tanggal :</label>
                <input type="text" name="date" style="border: 0px solid black; width:40%;" readonly value="<?php echo date('Y/m/d')?>"  >
            </div>
            <div>
                <input type="text" name="status" style="border: none; color: white" readonly value="masuk" >
            </div>
        </div>
        <div class="dropdown container d-flex justify-content-between">
            <div class="box">
                <p style="margin-bottom: 10px"><b>Nama Barang</b></p>
                <select name="product" id="select">
                    @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="box">
                <p><b>Kuantitas</b></p>
                <div class="btn-group">
                    <input type="number" name="quantity" id="qty-input" min="1">
                </div>
            </div>
        </div>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <div class="submit container d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">Masukkan</button>
        </div>
    </form>
</body>
</html>
