<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
</head>
<body>
    <h1>Ini Halaman Galeri</h1>
    <tabel border="3">
        <tr>
            <td>ID</td>
            <td>Foto</td>
            <td>Kategori</td>
            <br>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->id_galeri }}</td>
            <td><img src="{{ $item->foto }}" width="300" height="400"></td>
            <td>{{ $item->nama_kategori }}</td>
            <br>
        </tr>
        @endforeach
</body>
</html>