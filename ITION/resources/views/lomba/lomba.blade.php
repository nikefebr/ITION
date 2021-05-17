<head>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Lomba</title>
</head>

<body style="background-color: #F4F4F4;">
    @include('navbar')
    
    <div class="bg-blue-gradient">
    <div class="p-3"></div>
        <div class="container p-5">
            <div class="row">
                <img class="img-fluid mx-auto" src="{{asset('image/lomba.png')}}" style="width: 800px; height: 450px">
            </div>

            <div class="p-5"></div>
            <div class="p-1"></div>

            <div class="row text-white">
                <h4 class="fw-bold text-center">Keuntungan sering mengikuti lomba</h4>
                
                <div class="p-5"></div>

                <div class="row fw-bold text-center">
                    <div class="col-md-3 col-sm-6">
                        <p>Langkah untuk menjadi<br>
                            Mawapres</p>
                        <img src="{{asset('logo/mawapres-white.png')}}">
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <p>Personal Branding</p>
                        <img src="{{asset('logo/branding-white.png')}}">
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <p>Membuat<br>
                            CV lebih menarik</p>
                        <img src="{{asset('logo/cv-white.png')}}">
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <p>Mengasah skillmu</p>
                        <img src="{{asset('logo/skill-white.png')}}">
                    </div>

                    <div class="p-1"></div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        
        <div class="p-5"></div>
        <div class="mt-1"></div>

        <h1 class="fw-bold text-center">Ikuti Lomba</h1>

        <div class="p-4"></div>

        <div class="row">
            @foreach ($data as $item)
            <div class="col-md-3 col-sm-6">

                <div class="p-3"></div>

                <div class="card" style="width: 25rem; border-radius:30px">
                    <div class="row">
                        <img src="{{ $item->poster }}" class="card-img-top" alt="">
                            <div class="">
                                <p class="card-text">Publish </p>
                            </div>
                    </div>

                    <div class="p-3"></div>

                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="card-body">
                                <h5 class="card-text fw-bold text-blue">{{ $item->judul }}</h5>
                                <h6 class="card-text fw-light text-blue">{{ $item->nama_kategori }}</h6>
                                
                                <p class="card-text text-grey mt-4">
                                    Deskripsi
                                </p>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-5 mt-0 pt-0">
                            <div class="p-2"></div>

                            <div class="card-body bg-blue-2 text-center">
                                <h6 class="card-text fw-bold text-blue text-white">DEADLINE</h6>
                                <h6 class="card-text fw-bold text-blue text-white">PENDAFTARAN</h6>
                                
                                <p class="card-text mt-4">
                                    {{ \Carbon\Carbon::parse($item->deadline)->format('d F Y') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row ms-0" style="width: 25rem;">
                        <button class="button-katalog fw-bolder text-blue-2" type="button" onclick="window.location='{{ url("lomba/$item->id_lomba") }}'">Daftar Lomba Ini</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <div class="p-5"></div>

    <div>
    <tabel border="3">
        <tr>
            <td>ID</td>
            <td>Gambar</td>
            <td>Judul</td>
            <td>Kategori</td>
            <td>Button</td>
            <br>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->id_lomba }}</td>
            <td><img src="{{ $item->poster }}" alt="Girl in a jacket" width="300" height="400"></td>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->nama_kategori }}</td>
            <td><button type="button" onclick="window.location='{{ url("lomba/$item->id_lomba") }}'">Selengkapnya >></button></td>
            <br>
        </tr>
        @endforeach
    </tabel>
    </div>
    @include('footer')
</body>
</html>