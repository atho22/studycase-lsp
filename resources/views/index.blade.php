<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <thead>
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Deskripsi Barang</th>
            <th>Harga</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barangs as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->namaBarang }}</td>
            <td>{{ $data->deskripsiBarang}}</td>
            <td>{{ $data->harga }}</td>
            <td> <a href="/barang/{{ $data->id }}">Edit</a>
            <td> <a href="/delete/{{ $data->id }}">hapus</a>
        </tr>
        @endforeach
    </tbody>
</table>


</html>