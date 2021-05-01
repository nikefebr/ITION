<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lomba</title>
</head>
<body>
    <h1>Ini Halaman Lomba</h1>
    <tabel border="1">
    @foreach ($data as $item)
    <tr>
        <td>{{ $item->id_lomba }}</td>
        <td><img src="{{ $item->poster }}" alt="Girl in a jacket" width="500" height="600"></td>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->nama_kategori }}</td>
        <button type="button" onclick="window.location='{{ url("lomba/$item->id_lomba") }}'">Selengkapnya >></button>
    </tr>
    @endforeach
    </tabel>
    
</body>
</html>