<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>List Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>List Product</h1>
    
    <a href="/CRUD/create" class="btn btn-success">Create</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Kategori</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->kategori}}</td>
                    <td>{{$product->produk}}</td>
                    <td>{{$product->harga}}</td>
                    <td>{{$product->deskripsi}}</td>
                    <td><img src="{{$product->img}}" alt="Gambar produk" style="max-width: 100px;"></td>
                    <td>
                        <a href="/CRUD/{{$product->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/CRUD/{{$product->id}}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this data?');">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
