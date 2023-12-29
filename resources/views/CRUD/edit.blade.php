<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Edit Product</h1>

    <form action="/CRUD/{{$product->id}}" method="POST">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <input type="text" class="form-control" id="kategori" name="kategori" value="{{$product->kategori}}" required>
        </div>

        <div class="form-group">
            <label for="produk">Produk:</label>
            <input type="text" class="form-control" id="produk" name="produk" value="{{$product->produk}}" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{$product->harga}}" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$product->deskripsi}}" required>
        </div>

        <div class="form-group">
            <label for="img">Image URL:</label>
            <input type="text" class="form-control" id="img" name="img" value="{{$product->img}}" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

</body>
</html>
