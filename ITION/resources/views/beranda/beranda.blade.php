<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/beranda.css') }}">
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')
    
    <div class="bg-blue-gradient">
        <div class="p-5"></div>
        
        <div class="container p-5">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="{{asset('image/image 1.png')}}">
                </div>

                <div class="col-md-2 col-sm-2"></div>

                <div class="col-md-6 col-sm-6">
                    <p class="fw-bold fs-3 text-white">
                        Info lomba 
                    </p>

                    <p class="text-white">
                    Yuk  Cari dan Ikuti Lomba dengan hadiah menarik di ITION. <br>
                    Berbagai lomba bidang IT bisa kamu dapatkan disini dengan fitur <br>
                    yang memudahkanmu untuk mendapat informasi secara detail dan terpercaya 
                    </p>

                    <div class="p-3"></div>

                    <button class="button-lomba fw-bolder" onclick="window.location='{{ url("lomba") }}'">Cari Lomba</button>
                </div>

                <div class="p-3"></div>
            </div>
        </div>
    </div>

    <div class="p-5"></div>
    @foreach ($highlight as $item)
    <div class="container">
        <div class="card w-100">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <img class="" src="{{ $item->poster }}" width="300" height="400">
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card-body" style="width: 30rem;">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <h6 class="card-text fw-normal">{{ $item->nama_kategori }}</h6>
                        <p></p>
                        <p class="card-text">lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6"></div>
                <div class="col-md-3 col-sm-6 text-center text-white bg-blue">
                    <div class="card-body">
                        <h5 class="card-title">DEADLINE</h5>
                        <h5 class="card-title">PENDAFTARAN</h5>

                        <p></p>

                        <div class="p-3"></div>

                        <button class="button fw-bolder" onclick="window.location='{{ url("lomba/$item->id_lomba") }}'">Baca Selengkapnya !</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-5"></div>
    </div>
    @endforeach

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="p-3"></div>
                <h3 class="fw-normal">Great things <br>
                never came from comfort zone</h3>
                <div class="p-5"></div>
            </div>

            <div class="col-md-2 col-sm-2"></div>
            @foreach ($galeri as $item)
            @if ($loop->first)
            <div class="col-md-3 col-sm-6">
                <h5 class="fw-bold">Lihat keseruan lainnya</h5>
                <div class="p-2"></div>

                <div class="card" style="background-color:#F4F4F4; width: 18rem; border:none;">
                    <img src="{{ $item->foto }}" class="card-img-top" alt="" width="200" height="200">
                        <div class="card-body">
                            <p class="card-text fw-normal"></p>
                            <p class="card-text fw-bold"></p>
                    </div>
                </div>
            </div>
            @endif
            
            @if ($loop->last)
            <div class="col-md-3 col-sm-6 px-5">
                <div class="p-4"></div>

                <div class="card" style="background-color:#F4F4F4; width: 18rem; border:none;">
                    <img src="{{ $item->foto }}" class="card-img-top" alt="" width="200" height="200">
                        <div class="card-body">
                            <p class="card-text fw-normal"></p>
                            <p class="card-text fw-bold"></p>

                            <div class="p-4"></div>

                            <button class="white-button fw-bolder" onclick="window.location='{{ url("galeri") }}'">Selengkapnya>></button>

                            <div class="p-4"></div>
                        </div>
                </div>
            </div>
            @endif
            
            @endforeach
        </div>
    </div>

    <div class="bg-yellow-ition">
        <div class="container">
            <div class="p-4"></div>

                <h5 class="fw-bold">Yuk ikuti lomba lainnya</h5>

                <div class="row">
                    <div class="col-md-3 col-sm-6">

                        <div class="p-3"></div>

                        <div class="card" style="width: 25rem;">
                            <div class="row">
                                <img src="" class="card-img-top" alt="">
                                    <div class="card-img-overlay">
                                        <p class="card-text">Publish </p>
                                    </div>
                            </div>

                            <div class="p-3"></div>

                            <div class="row">
                                <div class="col-md-7 col-sm-7">
                                    <div class="card-body">
                                        <h5 class="card-text fw-bold text-blue">Judul</h5>
                                        <h6 class="card-text fw-light text-blue">Kategori</h6>
                                        
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
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row ms-0" style="width: 25rem;">
                                <button class="button-katalog fw-bolder text-blue-2">Daftar Lomba Ini</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="p-5"></div>
    </div>

    <div class="p-4"></div>
    
    <div class="container mt-0 bg-white-ition">
        <h5 class="fw-bold text-center">Keuntungan sering mengikuti lomba</h5>
        <div class="p-4"></div>

            <div class="row fw-bold text-center">
                <div class="col-md-3 col-sm-6">
                    <p>Langkah untuk menjadi<br>
                        Mawapres</p>
                    <img src="{{asset('logo/mawapres.png')}}">
                </div>

                <div class="col-md-3 col-sm-6">
                    <p>Personal Branding</p>
                    <img src="{{asset('logo/branding.png')}}">
                </div>

                <div class="col-md-3 col-sm-6">
                    <p>Membuat<br>
                        CV lebih menarik</p>
                    <img src="{{asset('logo/cv.png')}}">
                </div>

                <div class="col-md-3 col-sm-6">
                    <p>Mengasah skillmu</p>
                    <img src="{{asset('logo/skill.png')}}">
                </div>
            </div>
    </div>

    <div class="p-5"></div>

    <div class="container mt-0 bg-white-ition">
        <h5 class="fw-bold">Apa kata mereka?</h5>
        <div class="p-4"></div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
        @foreach ($testimoni1 as $item)
        <!-- <div class="card mx-auto" style="max-width: 900px;"> -->
            <div class="row g-0">
                <div class="col-md-2">
                <div class="fototestimoni">
                 <img src="{{ url('image/reviewer/'.$item->foto) }}" id="fototestimoni" class="img-fluid">
                </div>
                </div>
                <div class="col-md-8 bg-blue px-4" id="text">
                    <div class="p-4"></div>
                    <div class="card-body text-white">
                        <p class="card-text d-block">{{ $item->testimoni }}</p>
                    </div>
                    <div class="p-5"></div>
                </div>
            </div> 
        <!-- </div> -->
        @endforeach
        </div>
        <div class="carousel-item">
        @foreach ($testimoni as $item)
        <!-- <div class="card mx-auto" style="max-width: 900px;"> -->
            <div class="row g-0">
                <div class="col-md-2">
                <div class="fototestimoni">
                 <img src="{{ url('image/reviewer/'.$item->foto) }}" id="fototestimoni" class="img-fluid">
                </div>
                </div>
                <div class="col-md-8 bg-blue px-4" id="text">
                    <div class="p-4"></div>
                    <div class="card-body text-white">
                        <p class="card-text d-block">{{ $item->testimoni }}</p>
                    </div>
                    <div class="p-5"></div>
                </div>
            </div> 
        <!-- </div> -->
        @endforeach
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
        </div>
        <div class="p-4"></div>
        <a class="fw-bold" href="testimoni" id="selengkapnya">Selengkapnya >></a>
    </div>
    <div class="p-5"></div>
    @include('footer')
</body>