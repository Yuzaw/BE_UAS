<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Create Product</h1>

    <form action="/CRUD" method="POST">
        @csrf
        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <input type="text" class="form-control" id="kategori" name="kategori" required>
        </div>

        <div class="form-group">
            <label for="produk">Produk:</label>
            <input type="text" class="form-control" id="produk" name="produk" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
        </div>

        <div class="form-group">
            <label for="img">Image URL:</label>
            <input type="text" class="form-control" id="img" name="img" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

</body>
</html>
