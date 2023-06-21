<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RIWAYAT</title>
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
                        <a class="nav-link active text-light" aria-current="page" href="{{ route('product.history')}}">Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('product.logistic') }}">Logistik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('product.report')}}">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('user.logout') }}">Logout</a>
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

    <form action="{{ route('product.searchH')}}">
        <div class="facture container d-flex justify-content-between pt-4">
            <div>
                <a href="{{ route('product.logistic')}}" style="color: black; text-decoration: none;font-weight: 600"> < KEMBALI</a>
            </div>
            <div>
                <h5><b>Riwayat</b></h5>
            </div>
            <div>
                <h5>Dari : </h5>
                <input class="form-control" type="date" name="dateFrom" aria-label="Search">
            </div>
            <div>
                <h5>Sampai : </h5>
                <input class="form-control" type="date" name="dateTo" aria-label="Search">
            </div>

            {{-- <div>
                <select name="kategori" id="select">
                    @foreach($products as $product)
                    @if ($product->)

                    @endif
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div> --}}

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
            <form action="{{ route('product.history')}}">
                <input class="btn btn-primary" type="submit" value="Cari">
            </form>
        </div>
    </form>

    <hr class="container">
    <form action="" method="POST">
        @csrf
        <div class="dropdown container d-flex justify-content-between">
            <div class="box">
                <table>
                    <tr>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Unit</th>
                        <th>Kuantitas</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>

                    @foreach($product_action as $product_action)
                        @foreach ($products as $product)
                            @if ($product_action->product_id == $product->id)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->unit }}</td>
                                    <td>{{ $product_action->quantity }}</td>
                                    <td>{{ $product->category}}</td>
                                    <td>{{ $product_action->date}}</td>
                                    <td>{{ $product_action->status}}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </table>
            </div>
        </div>
    </form>
</body>
</html>
