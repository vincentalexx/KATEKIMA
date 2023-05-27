<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KATEKIMA - DETAIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/logistic-details.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg " style="background-color: #112B3C;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="asset/Versi Tulisan-Putih.png" alt="company-logo" width="253.75" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
                
        </button>

            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Logistik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Laporan</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="asset/Profile.png" alt="Foto Profil" width="30" height="30">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="search-bar container d-flex justify-content-end">      
        <form class="search-engine d-flex me-3" role="search">
            <input class="form-control" type="search" placeholder="Cari barang ..." aria-label="Search">
            
            <span class="icon-search input-group-text" id="basic-addon1" aria-current="Search" href="www.google.com">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </span>
        </form>

        <div class="dropdown-sort">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Urutkan
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="#" class="dropdown-item">Berdasarkan stok barang</a></li>
                <li><a href="#" class="dropdown-item">Berdasarkan nama barang(A-Z)</a></li>
                <li><a href="#" class="dropdown-item">Berdasarkan harga barang</a></li>

                <button class="dropdown-item" type="button">Berdasarkan nama barang (A-Z)</button>
                <button class="dropdown-item" type="button">Berdasarkan harga barang</button>
            </ul>
        </div>
    </div>

    <div class="Content container d-flex ">
        <div class="title">
            <hr>
            <div class="sub-title">
                <h5>FILTER<h5>
            </div>
            <div class="kategori">
                <p>Berdasarkan Jenis</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Alat Tulis Kantor (ATK)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Kertas Digital Printing
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Kertas Fotocopy
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Tinta & Toner Mesin
                    </label>
                </div>
            </div>
            <div class="kategori">
                <p>Berdasarkan Stok</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Tersedia
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                        Tidak Tersedia
                    </label>
                </div>
            </div>

            <hr>
            <div class="sub-title">
                <h5>AKSI<h5>
                    <div class="button-action">
                        <a class="btn btn-primary" href="#" role="button">Barang Masuk</a>
                    </div>
                    <div class="button-action">
                        <a class="btn btn-primary" href="#" role="button">Barang Keluar</a>
                    </div>
                    <div class="button-action">
                        <a class="btn btn-primary" href="#" role="button">Buat Produk Baru</a>
                    </div>
            </div>
            <hr>
        </div>
        
    <div class="container cards">
        <hr>
        <div class="row">
            <b> Detail Barang </b>
            <div class="col-xs-2-5 container d-flex ">
                <div class="card-content content-img">
                    <a href="#" class="konten-card">
                        <img src="asset/pulpen.jpg" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="card-content tulisan d-flex">
                    <div class="isi">
                        <p> ID </p>
                        <p> Nama </p>
                        <p> Unit </p>
                        <p> Stok </p>
                        <p> Kategori </p>
                        <p> Deskripsi </p>
                    </div>
                    <div class="aksen">
                        <p> : </p>
                        <p> : </p>
                        <p> : </p>
                        <p> : </p>
                        <p> : </p>
                        <p> : </p>
                    </div>
                    <div class="isi">
                        <p> ITM-000001 </p>
                        <p> Pulpen 0.2 mm </p>
                        <p> Satuan </p>
                        <p> 100 </p>
                        <p> ATK </p>
                        <p> Good Pen </p>
                    </div>
                </div>
            </div>
           
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>