<head>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Detail Lomba</title>
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')
    @foreach ($data as $item)
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
                <img src="{{ $item->poster }}" class="img-fluid mx-auto">
                <h5 class="fw-normal">{{ $item->deskripsi }}</h5>
            </div>

            <div class="col-md-4 col-sm-5"></div>

            <div class="col-md-4 col-sm-5 px-5">
                <div class="card px-3 pt-3" style="width: 23rem;">
                    <h5>Tunggu apa lagi ayo daftar Lomba {{ $item->nama_kategori }} sekarang :D <br><br>
                    Informasi CP : <br>
                    WA. +{{ $item->kontak }} ({{ $item->nama_kontak }}) <br>
                    </h5>
                    <a href="https://wa.me/{{ $item->kontak }}">Klik disini untuk menghubungi CP !</a>

                    <div class="p-4"></div>

                    <div class="px-5">
                        <button class="button-daftar-lomba fw-bolder" onclick="window.open('{{ $item->link_website }}')">Daftar Sekarang</button>
                    </div>
                </div>

                <div class="p-4"></div>

                <div class="px-5">
                    <button class="white-button-daftar fw-bolder" onclick="window.open('{{ $item->link_panduan }}')">Buku Panduan</button>
                </div>
            </div>
        </div>

        <div class="p-4"></div>

        <div class="row">
            <h1 class="fw-bold">Syarat Lomba</h1>
            <h5 class="fw-normal">{{ $item->syarat }}</h5>
        </div>

        <div class="p-4"></div>

        <div class="row">
            <h1 class="fw-bold">Timeline</h1>
            <h5 class="fw-normal">{{ $item->timeline }}</h5>
        </div>

        <div class="p-4"></div>

        <div class="row">
            <h1 class="fw-bold">Biaya Pendaftaran</h1>
            @if($item->biaya == 0)
            <h5 class="fw-normal">Gratis</h5>
            @else
            <h5 class="fw-normal">@currency($item->biaya)</h5>
            @endif
        </div>

        <div class="p-4"></div>

        <div class="row">
            <h1 class="fw-bold">Juara + Hadiah</h1>
            <h5 class="fw-normal">Deskripsi</h5>
        </div>
    </div>

    <div class="p-4"></div>
    @endforeach
    <div class="p-4"></div>
    
    @include('footer')
</body>
</html>