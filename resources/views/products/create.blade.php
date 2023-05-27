<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KATEKIMA</title>
</head>
<body>
    <h1>Buat Produk Baru</h1>
    {{-- <form method="post" action="{{ route('product.store') }}"> --}}
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <label>Name : </label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label>Description : </label>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <label>Unit : </label>
            <input type="text" name="unit" placeholder="Unit">
        </div>
        <div>
            <label>Stock : </label>
            <input type="text" name="stock" placeholder="Stock">
        </div>
        <div>
            <label>Category : </label>
            <input type="text" name="category" placeholder="category">
        </div>
        <div>
            <label>Choose an image : </label>
            <input type="file" name="image" placeholder="Choose an image">
        </div>
        <input type="submit" value="Save a New Product">
    </form>
</body>
</html>