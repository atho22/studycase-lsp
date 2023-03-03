<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<hr>
<h2>Edit Barang</h2>
<form action="/barang/update/{{$barangs->id}}" method="post">
    @csrf
    <div class="form-group">
        <label for="namaBarang">Nama Barang:</label>
        <input type="text" class="form-control" id="namaBarang" name="judulProduk" value="{{$barangs->judulProduk}}">
    </div>
    <div class="form-group">
        <label for="deskripsiBarang">Deskripsi Barang:</label>
        <input type="text" class="form-control" id="deskripsiBarang" name="deskripsi" value="{{$barangs->deskripsi}}">
    </div>
    <div class="form-group">
        <label for="harga">Harga:</label>
        <input type="text" class="form-control" id="harga" name="harga" value="{{$barangs->harga}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form> 
    
</body>
</html>