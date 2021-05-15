<head>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Detail Lomba</title>
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')

    <div class="p-4"></div>
    
    <div class="container">
        <div class="row">
        <img class="img-fluid mx-auto" src="{{asset('image/detail_lomba.png')}}">
        </div>
    </div>

    <div class="p-4"></div>

    <div class="container px-5 px-5">
        <div class="row">
            <div class="col-md-4 col-sm-5">
                <h1 class="fw-bold">Deskripsi</h1>
                <img class="img-fluid mx-auto">Poster
                <h5 class="fw-normal">Deskripsi</h5>
            </div>

            <div class="col-md-4 col-sm-5"></div>

            <div class="col-md-4 col-sm-5 px-5">
                <div class="card px-3 pt-3" style="width: 23rem;">
                    <h5>Tunggu apa lagi ayo daftar Lomba Hackathon sekarang :D <br><br>
                    Informasi CP : <br>
                    WA. 087701437591 (Anon) <br>
                    </h5>
                    <a href="">Klik disini untuk menghubungi CP !</a>

                    <div class="p-4"></div>

                    <div class="px-5">
                        <button class="button-daftar-lomba fw-bolder">Daftar Sekarang</button>
                    </div>
                </div>

                <div class="p-4"></div>

                <div class="px-5">
                    <button class="white-button-daftar fw-bolder">Buku Panduan</button>
                </div>
            </div>
        </div>

        <div class="p-4"></div>

        <div class="row">
            <h1 class="fw-bold">Syarat Lomba</h1>
            <h5 class="fw-normal">Deskripsi</h5>
        </div>

        <div class="p-4"></div>

        <div class="row">
            <h1 class="fw-bold">Timeline</h1>
            <h5 class="fw-normal">Deskripsi</h5>
        </div>

        <div class="p-4"></div>

        <div class="row">
            <h1 class="fw-bold">Biaya Pendaftaran</h1>
            <h5 class="fw-normal">Deskripsi</h5>
        </div>

        <div class="p-4"></div>

        <div class="row">
            <h1 class="fw-bold">Juara + Hadiah</h1>
            <h5 class="fw-normal">Deskripsi</h5>
        </div>
    </div>

    <div class="p-4"></div>
    
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

    <div class="p-4"></div>
    
    @include('footer')
</body>
</html>