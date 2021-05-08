<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Testimoni</title>
</head>
<body>
    @include('navbar')
    <h1>Ini Halaman Testimoni</h1>
    <tabel class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Foto</th>
            <th>Judul Lomba</th>
            <th>Tahun Lomba</th>
            <th>Testimoni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th>{{ $item->nama }}</th>
            <th><img src="{{ url('image/reviewer/'.$item->foto) }}" width="100"></th>
            <th>{{ $item->judul }}</th>
            <th>{{ $item->tahun_lomba }}</th>
            <th>{{ $item->testimoni }}</th>
        </tr>
        @endforeach
    </tbdoy>
    </tabel>
    @include('footer')
</body>
</html>