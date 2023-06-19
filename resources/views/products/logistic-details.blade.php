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
            <a class="navbar-brand" href="{{route('product.logistic')}}">
                <img src="asset/Versi Tulisan-Putih.png" alt="company-logo" width="253.75" height="50">
                {{-- <img src="asset/Versi Tulisan-Putih.png" alt="company-logo" width="253.75" height="50"> --}}
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

    <form>
        <div class="container d-flex justify-content-between pt-4">
            <div>
                <a href="{{ route('product.logistic')}}" style="color: black; text-decoration: none;font-weight: 600"> < KEMBALI</a>
            </div>
            <div>
                <h5><b>Detil Barang</b></h5>
            </div>
            <div>
                <a style="color: black; text-decoration: none;font-weight: 600; opacity:0%"> < KEMBALI</a>
            </div>
        </div>
    </form>
    <hr class="container">

    <div class="container d-flex justify-content-center">
        <div class="all col-xs-2-5 container d-flex ">
            <div class="card-content content-img" style="display:flex; justify-content: flex-end">
                <a href="#" class="konten-card">
                    @if ($products->image)
                        <div class="producting" style="width:400px">
                            <img src="{{ url('image').'/'.$products->image }}" class="card-img">
                        </div>
                    @endif
                </a>
            </div>

            <div class="kanan" style="margin-left: 20px">
                <form method="post" action="{{ route('product.updatess', ['product' => $products]) }}">
                    @csrf
                    @method('put')
                    <div class="content-1 tulisan d-flex">
                        <div class="isi">
                            {{-- <p style="font-weight: 700"> ID :</p> --}}
                            <label>ID :</label>
                            <input type="text" name="id" id="" readonly value="{{$products->id}} ">
                            {{-- <p> {{$products->id}} </p> --}}
                        </div>
                        <div class="isi">
                            <label>Nama :</label>
                            {{-- <p style="font-weight: 700"> Nama :</p> --}}
                            <input type="text" name="name" id="" value="{{$products->name}} ">
                            {{-- <p> {{$products->name}} </p> --}}
                        </div>
                        <div class="isi">
                            <label>Unit :</label>

                            {{-- <p style="font-weight: 700"> Unit :</p> --}}
                            <input type="text" name="unit" id="" value="{{$products->unit}} ">
                            {{-- <p> {{$products->unit}} </p> --}}
                        </div>
                        <div class="isi">
                            <label>Stok :</label>

                            {{-- <p style="font-weight: 700"> Stok :</p> --}}
                            <input type="text" name="stock" id="" readonly value="{{$products->stock}} ">
                            {{-- <p> {{$products->stock}} </p> --}}
                        </div>
                        <div class="isi">
                            <label>Deskripsi :</label>

                            {{-- <p style="font-weight: 700"> Deskripsi :</p> --}}
                            <input type="text" name="description" id="" value="{{$products->description}} ">
                            {{-- <p> {{$products->description}}</p> --}}
                        </div>
                        <div class="isi">
                            <label>Kategori :</label>

                            {{-- <p style="font-weight: 700"> Kategori :</p> --}}
                            <input type="text" name="category" id="" readonly value="{{$products->category}} ">
                            {{-- <p> {{$products->stock}} </p> --}}
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Perbarui" class="button btn">
                    </div>
                </form>
                <div class="content-2">
                    <form method="post" action="{{ route('product.destroy', ['product' => $products->id]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class= "button btn">
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
