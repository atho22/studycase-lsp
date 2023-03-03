<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<li><a href="/barang">kelola data produk</a></li>
</div>
<button class="toggle-sidebar" id="toggle-sidebar">Toggle Sidebar</button>
    
    <ul class="sidebar">
      <li><a href="/dashboard">Beranda</a></li>
      <li><a href="/index">kelola data produk</a></li>
    </ul>
<table border="1">
    <thead>
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Deskripsi Barang</th>
            <th>Harga</th>
            <th>gambar</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barangs as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->judulProduk }}</td>
            <td>{{ $data->deskripsi}}</td>
            <td>{{ $data->harga }}</td>
            <td><img alt="inigambar" width="100px" src="/public/images/{{$data->gambar}}"></td>

            <td> <a href="/barang/{{ $data->id }}">Edit</a>
            <td> <a href="/delete/{{ $data->id }}">hapus</a>
        </tr>
        @endforeach
    </tbody>
</table>


</html>