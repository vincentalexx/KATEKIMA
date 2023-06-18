<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAPORAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/report.css" rel="stylesheet">

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
                        <a class="nav-link" href="{{ route('product.history')}}">Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.logistic') }}">Logistik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('product.report')}}" >Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.logout') }}" >Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <form action="{{ route('product.searchR')}}">
        <div class="container d-flex justify-content-between pt-4">
            <div>
                <a href="{{ route('product.logistic')}}" style="color: black; text-decoration: none;font-weight: 600"> < KEMBALI</a>
            </div>
            <div>
                <h5><b>Laporan</b></h5>
            </div>
            <div>
                <a href="{{ route('product.logistic')}}" style="color: black; text-decoration: none;font-weight: 600; opacity:0%"> < KEMBALI</a>
            </div>
        </div>
    </form>

    <hr class="container">

    <form action="{{ route('product.searchR')}}">
        <div class="container d-flex justify-content-between pt-4">
            <div class="box-tanggal">
                <p>Pilih Bulan : </p>
                <input class="form-control" type="month" name="date" value="<?php echo date('Y-m')?>" />
            </div>
            <form>
                <input class="btn" type="submit" value="Cari">
            </form>
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
    </form>

    <form action="" method="POST">
        @csrf
        <div class="dropdown container d-flex justify-content-between">
            <div class="box">

                <table style="border-collapse: collapse">
                    <tr>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Unit</th>
                        <th>Stok</th>
                        <th>Masuk</th>
                        <th>Keluar</th>
                    </tr>
                
                    @foreach($products as $product)
                        @php
                            $masukTotal = 0;
                            $keluarTotal = 0;
                        @endphp
                        @foreach($product_action as $action)
                            @if($action->product_id == $product->id)
                                @if($action->status == 'masuk')
                                    @php
                                        $masukTotal += $action->quantity;
                                    @endphp
                                @elseif($action->status == 'keluar')
                                    @php
                                        $keluarTotal += $action->quantity;
                                    @endphp
                                @endif
                            @endif
                        @endforeach
                        @if ($masukTotal > 0 || $keluarTotal > 0)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->unit }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $masukTotal }}</td>
                                <td>{{ $keluarTotal }}</td>
                            </tr>
                        @endif
                    @endforeach

                </table>                
            </div>
        </div>
    </form>
</body>
</html>
