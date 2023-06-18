<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KATEKIMA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #112B3C;">
        <div class="container">
            <a class="navbar-brand" href="{{ route('product.logistic') }}">
                <img src="asset/Versi Tulisan-Putih.png" alt="company-logo" width="253.75" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('product.history')}}">Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('product.logistic') }}">Logistik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.report')}}">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
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

    <div class="search-bar container d-flex justify-content-end">
        <form action="{{ route('product.logistic') }}" class="search-engine d-flex me-3" role="search" method="GET">
            <input class="form-control" type="search" name="search" placeholder="Cari barang ..." aria-label="Search">
            <span class="icon-search input-group-text" id="basic-addon1" aria-current="Search" href="www.google.com">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </span>
        </form>
    </div>

    <div class="Content container d-flex ">
        <div class="title">
            <hr>
            <div class="sub-title">
                <h5>FILTER<h5>
            </div>
            <form action="{{ route('product.logistic') }}" method="GET">
                <div class="kategori">
                    <p>Sortir</p>
                    <select name="sort" id="sortir">
                        <option value="stock">Stok</option>
                        <option value="name">Nama</option>
                    </select>
                </div>
                <div class="kategori" style="padding-top: 10px">
                    <p>Berdasarkan Stok</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="stock" id="stock1" value="1">
                        <label class="form-check-label" for="stock1">Tersedia</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="stock" id="stock0" value="0">
                        <label class="form-check-label" for="stock0">Tidak Tersedia</label>
                    </div>
                </div>
                <div class="kategori" style="padding-top: 10px">
                    <p>Berdasarkan Kategori</p>
                    <div class="input-group mb-3" style="border: lightgrey 1px solid; width: 82%;" >
                        <input type="text" class="form-control" placeholder="Cari berdasarkan kategori" name="category" value="{{ request('category') }}" aria-label="Search by Category">
                    </div>
                </div>                
                <button type="submit" class="btn">Filter</button>
            </form>

            <hr>
            <div class="sub-title">
                <h5>AKSI<h5>
                <div class="button-action">
                    <a class="btn btn-primary" href="{{ route('product.inbound') }}" role="button">Barang Masuk</a>
                </div>
                <div class="button-action">
                    <a class="btn btn-primary" href="{{ route('product.outbound') }}" role="button">Barang Keluar</a>
                </div>
                <div class="button-action">
                    <a class="btn btn-primary" href="{{ route('product.create') }}" role="button">Buat Produk Baru</a>
                </div>
            </div>
            <hr>
        </div>

    <div class="container cards">
        <hr>
        <div class="title">
            <b>Barang Tersedia</b>
        </div>

        <div class="row">
            @foreach($products as $product)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <a  href="{{route('product.logisticdetails', $product->id)}}" class="konten-card">
                        @if ($product->image)
                            <div class="productimg">
                                <img src="{{ url('image').'/'.$product->image }}" class="card-img">
                            </div>
                        @endif
                        <div class="keterangan d-flex" style="justify-content: flex-start">
                            <div class="isi">
                                <p>ID</p>
                                <p>Nama</p>
                                <p>Stok</p>
                            </div>
                            <div class="isi aksen">
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                            </div>
                            <div class="isi">
                                <p>{{ $product->id }}</p>
                                <p>{{ $product->name }}</p>
                                <p>{{ $product->stock }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @if($loop->iteration % 4 == 0)
                    </div>
                    <div class="row">
                @endif
            @endforeach
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchForm = document.querySelector('.search-engine');
            const searchIcon = document.querySelector('.icon-search');

            searchIcon.addEventListener('click', function() {
                searchForm.submit();
            });
        });
    </script>
</body>
</html>
