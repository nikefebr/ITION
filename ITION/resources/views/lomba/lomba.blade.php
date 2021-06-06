<head>
   <link rel="stylesheet" type="text/css" href="{{ asset('css/lomba.css') }}">
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
        <div class="content-section">
        <div class="card-place">
            <div class="row">
                @foreach ($data as $item)
                <div class="col-lg-6 col-md-12 col-sm-12 p-5 ">
                    <div class="card" style="width: 20rem; height: 450px; border-radius:20px">
                        <div class="">
                            <img src="{{ url('image/lomba/'.$item->poster) }}" class="card-img" alt="" style="border-radius: 20px 20px 0px 0px; max-width: 370px; height: 300px;">
                            <p class="card-text ps-3 text-grey pt-2">Publish </p>
                        </div>
                        <div class="card-body">
                                    <h5 class="card-text fw-bold text-blue font-12px">{{ $item->judul }}</h5>
                                    <h6 class="card-text fw-light text-blue font-12px">{{ $item->nama_kategori }}</h6>
                                    
                                    <p class="card-text text-grey mt-4 font-12px">
                                    {{ \Illuminate\Support\Str::limit($item->deskripsi, 25, $end='...') }}
                                    </p>
                                
                                 <div class="card-body bg-blue-2 text-center blue-box">
                                        <p class="card-text fw-bold text-blue text-white font-12px">DEADLINE <br>
                                        PENDAFTARAN</p>

                                        <div class="p-1"></div>
                                        
                                        <p class="card-text mt-4 text-white font-12px text-uppercase">
                                        {{ \Carbon\Carbon::parse($item->deadline)->format('d F Y') }}
                                        </p>
                                </div>
                                <button class="button-katalog fw-bolder text-blue-2 card-button" onclick="window.location='{{ url("lomba/$item->id_lomba") }}'">Daftar Lomba Ini</button>
                        </div>
                    </div>      
                </div>
                @endforeach
            </div>
            </div>
            <div class="filter-place">
                <h1>filter disini yaa buat div baru</h1>
            </div>
        </div>
</div>
    <div class="p-5"></div>
    @include('footer')
</body>
</html>