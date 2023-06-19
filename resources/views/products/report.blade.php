<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotocopy Rajawali</title>
    <link rel="stylesheet" href="css/report.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="header">
            <h2>Rajawali Fotocopy</h2>
            <ul>
                <li><a href="#">History</a></li>
                <li><a href="#">Logistic</a></li>
                <li><a href="#" style="color: rgba(246, 107, 14, 1);">Report</a></li>
            </ul>
            <i class="fas fa-user"></i>
        </div>
    </header>
    <div class="container">
        <div class="detail">
            <h3>Laporan</h3>
            <div>
                <h5>Pilih Bulan : </h5>
                <input id="form-control" type="month" name="date" value="<?php echo date('Y-m')?>" />
            </div>
            <form action="{{ route('product.history')}}">
                <input class="btn btn-primary" type="submit" value="Cari">
            </form>
        </div>
        <div class="table">
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
</body>
<footer style="height:50px"></footer>
</html>
