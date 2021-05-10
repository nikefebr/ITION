<head>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Detail Lomba</title>
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')
    
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
    @include('footer')
</body>
</html>