<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lomba</title>
</head>
<body>
    <h1>Ini Halaman Detail Lomba</h1>
    <tabel border="1">
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->id_lomba }}</td>
        <td><img src="{{ $item->poster }}" alt="Girl in a jacket" width="200" height="300"></td>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->biaya }}</td>
        <td>{{ $item->nama_kategori }}</td>
        <td><a href="https://wa.me/{{$item->kontak}}?text=Halo%20kak," target="_blank">Kontak</a></td>
    </tr>
    @endforeach
    </tabel>
</body>
</html>