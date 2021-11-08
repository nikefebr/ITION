<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/beranda.css') }}">
    <title>Beranda</title>

    @include('snippets/fonts')
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')
    
    <div class="bg-blue-gradient">
        <div class="p-5"></div>
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <img class="img-header" src="{{asset('image/image 1.png')}}" style="width: 30vw;">
                </div>
                <div class="col-lg-7 col-md-8 col-sm-8 col-xs-8 p-5">
                    <p class="fw-bold fs-3 text-white">
                        Info lomba 
                    </p>

                    <p class="text-white font-14px" style="font-family: Montserrat;">
                    Yuk  Cari dan Ikuti Lomba dengan hadiah menarik di ITION.Berbagai lomba bidang IT bisa kamu dapatkan disini dengan fitur yang memudahkanmu untuk mendapat informasi secara detail dan terpercaya 
                    </p>

                    <div class="p-3"></div>
                    <button class="button-lomba fw-bolder" style="font-family: Roboto;" onclick="window.location='{{ url("lomba") }}'">Cari Lomba</button>
                </div>
                <div class="p-3"></div>
            </div>
        </div>
    </div>

    <div class="p-5"></div>
    
    @foreach ($highlight as $item)
    
    <div class="container">
        <div class="card card-beranda w-100" style="border-radius: 30px;">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <img class="img-fluid shadow img-poster" src="{{ url('image/lomba/'.$item->poster) }}" style="border-radius: 30px;">
                </div>
                <div class="col-lg-6 col-md-5 col-sm-7 col-xs-12 p-3">
                    <div class="card-body pt-5 " >
                        <p class="card-title fw-bold fs-4" style="font-family: Montserrat; margin-bottom: 0">{{ $item->judul }}</p>
                        <p class="card-text fw-light font-18px" style="font-family: Montserrat; margin-bottom: 0">{{ $item->nama_kategori }}</p>
                        <p class="font-14px mt-1" style="font-family: Roboto; color: rgba(0, 0, 0, 0.5);">Publish</p>

                        <br>
                        <p class="card-text text-card-body font-14px" style="font-family: Roboto;">{{ $item->deskripsi }}</p> 
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 text-center text-white bg-blue" style="border-radius: 0px 30px 30px 0px;">
                    <div class="card-body pt-5">
                        <h5 class="card-title" style="font-family: Roboto;">DEADLINE</h5>
                        <h5 class="card-title" style="font-family: Roboto;">PENDAFTARAN</h5>

                        <div class="p-3"></div>
                        <p class="card-text mt-4 text-white font-14px text-uppercase" style="font-family: Roboto;">{{ \Carbon\Carbon::parse($item->deadline)->format('d F Y') }}</p>

                        <div class="p-4"></div>

                        <button class="button fw-bolder" style="font-family: Roboto;" onclick="window.location='{{ url("lomba/$item->id_lomba") }}'">Baca Selengkapnya !</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-5"></div>

    </div>

    @endforeach

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="p-3"></div>
                <h3 class="fw-normal" style="font-family: Montserrat;">Great things never came from comfort zone</h3>
                <div class="p-5"></div>
            </div>
            
            @foreach ($galeri as $item)
            @if ($loop->first)
                <div class="col-lg-4 col-md-6 col-sm-12 px-5">
                    <h5 class="fw-bold" style="font-family: Montserrat;">Lihat keseruan lainnya</h5>
                    <div class="p-2"></div>

                    <div class="card" style="background-color:#F4F4F4; width: 18rem; border:none;">
                        <img src="{{ url('image/galeri/'.$item->foto) }}" id="0" class="card-img-top galeri-item" alt="" width="200" height="200" data-toggle="modal" data-target="#galeri-popup">
                            <div class="card-body">
                                <p class="card-text fw-normal tgl-foto font-14px" style="font-family: Roboto; color: rgba(0, 0, 0, 0.5);">{{ \Carbon\Carbon::parse($item->tgl_foto)->format('d F Y') }}</p>
                                <p class="card-text fw-bold deskripsi-foto" style="font-family: Roboto;">{{ $item->deskripsi }}</p>
                            </div>
                    </div>
                </div>
            @endif
            
            @if ($loop->last)
            <div class="col-md-3 col-sm-6 px-5">
                <div class="p-4"></div>

                <div class="card" style="background-color:#F4F4F4; width: 18rem; border:none;">
                    <img src="{{ url('image/galeri/'.$item->foto) }}" id="1" class="card-img-top galeri-item" alt="" width="200" height="200" data-toggle="modal" data-target="#galeri-popup">
                        <div class="card-body">
                        <p class="card-text fw-normal tgl-foto font-14px" style="font-family: Roboto; color: rgba(0, 0, 0, 0.5);">{{ \Carbon\Carbon::parse($item->tgl_foto)->format('d F Y') }}</p>
                            <p class="card-text fw-bold deskripsi-foto" style="font-family: Roboto;">{{ $item->deskripsi }}</p>

                            <div class="p-4"></div>

                            <button class="white-button fw-bolder float-end" style="font-family: Roboto;" onclick="window.location='{{ url("galeri") }}'">Selengkapnya>></button>

                            <div class="p-5"></div>
                        </div>
                </div>
            </div>
            @endif
            
            @endforeach
            <!-- Modal -->
            <div class="modal fade" id="galeri-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" style="border-radius: 50px; background: rgba(255, 255, 255, 0.8);">
                    <div class="modal-body px-5">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        
                        <button type="button" class="btn-close float-end pt-2" data-dismiss="modal" aria-label="Close">
                        </button>
                    
                        <img src="" class="card-img-top modal-img" alt="">

                        <p class="font-14px pt-3 mb-0" id="modal-tanggal"></p>
                        <h5 class="fw-bold mt-0" id="modal-deskripsi"></h5>

                        <div class="pb-2"></div>                                        
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-yellow-ition">
        <div class="container">
            <div class="p-4"></div>
                <h5 class="fw-bold" style="font-family: Montserrat;">Yuk ikuti lomba lainnya</h5>

                <div class="row">
                    @foreach ($lomba as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 p-5">
                        
                        <div class="card" style="width: 20rem; height: 450px; border-radius:20px">
                                <div class="">
                                    <img src="{{ url('image/lomba/'.$item->poster) }}" class="card-img" alt="" style="border-radius: 20px 20px 0px 0px; max-width: 370px; height: 300px;">
                                    <p class="card-text ps-3 text-grey pt-2"  style="font-family: Roboto; font-size: 8pt;">{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }} </p>
                                </div>

                            <div class="card-body">
                                <h5 class="card-text fw-bold text-blue" style="font-family: Montserrat; font-size: 8.5pt;">{{ $item->judul }}</h5>
                                <h6 class="card-text fw-light text-blue" style="font-family: Montserrat; font-size: 8pt;">{{ $item->nama_kategori }}</h6>
                                <p class="card-text text-grey mt-4 font-12px">{{ \Illuminate\Support\Str::limit($item->deskripsi, 25, $end='...') }}</p>

                                <div class="card-body bg-blue-2 text-center blue-box">
                                    <p class="card-text fw-bold text-blue text-white font-12px" style="font-family: Roboto;">DEADLINE <br>
                                                PENDAFTARAN</p>

                                    <div class="p-1"></div>

                                    <p class="card-text mt-4 text-white font-12px text-uppercase" style="font-family: Roboto;">
                                    {{ \Carbon\Carbon::parse($item->deadline)->format('d F Y') }}
                                                </p>
                                </div>


                                <button class="button-katalog fw-bolder text-blue-2 card-button" onclick="window.location='{{ url("lomba/$item->id_lomba") }}'">Daftar Lomba Ini</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            <div class="p-4"></div>
            
            <button class="white-button fw-bolder float-end" style="font-family: Roboto;" onclick="window.location='{{ url("lomba") }}'">Selengkapnya>></button>
        
        </div>          
        <div class="p-5"></div>
        <div class="p-2"></div>
    </div>
    
    <div class="p-4"></div>
    
    <div class="container mt-0">
        <h5 class="fw-bold text-center pt-4" style="font-family: Montserrat;">Keuntungan sering mengikuti lomba</h5>
        <div class="p-4"></div>
            <div class="row fw-bold text-center keuntungan" style="font-family: Roboto;">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pb-4">
                    <p>Langkah untuk menjadi Mawapres</p>
                    <img src="{{asset('logo/mawapres.png')}}">
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pb-4">
                    <p>Personal Branding</p>
                    <img src="{{asset('logo/branding.png')}}">
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pb-4">
                    <p>Membuat CV lebih menarik</p>
                    <img src="{{asset('logo/cv.png')}}">
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pb-4">
                    <p>Mengasah skillmu</p>
                    <img src="{{asset('logo/skill.png')}}">
                </div>
            </div>
    </div>

    <div class="p-5"></div>

    <div class="container mt-0">
        <h5 class="fw-bold" style="font-family: Montserrat;">Apa kata mereka?</h5>
        
        <div class="p-4"></div>
        
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    @foreach ($testimoni1 as $item)
                    <div class="card mx-auto bg-transparent border-0" style="width: 1100px;">
                        <div class="row g-0">
                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 pt-5 ms-auto">
                                <div class="card text-center" id="fototestimoni">
                                    <img src="{{ url('image/reviewer/'.$item->foto) }}" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 bg-blue px-3 mt-4 me-auto" style="width:50vw; height: 200px;" id="tekstestimoni">
                            <div class="p-4"></div>
                                <div class="card-body text-white" >
                                    <p style="font-family: Roboto;">"{{ $item->testimoni }}."</p>
                                </div>
                                <div class="p-4"></div>
                            </div>
                        </div> 
                    </div>
                    @endforeach
                </div>

                @foreach ($testimoni as $item)
                <div class="carousel-item">
                    <div class="card mx-auto bg-transparent border-0" style="width: 1100px;">
                        <div class="row g-0">
                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 pt-5 ms-auto">
                                <div class="card text-center" id="fototestimoni">
                                    <img src="{{ url('image/reviewer/'.$item->foto) }}" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 bg-blue px-3 mt-4 me-auto" style="width:50vw; height: 200px;" id="tekstestimoni">
                                <div class="p-4"></div>
                                    <div class="card-body text-white" >
                                        <p style="font-family: Roboto;">"{{ $item->testimoni }}."</p>
                                    </div>
                                <div class="p-4"></div>
                            </div>

                        </div> 
                    </div>
                </div>
                @endforeach
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
        <a class="fw-bold" style="font-family: Roboto;" href="testimoni" id="selengkapnya">Selengkapnya >></a>
    </div>



    <div class="p-5"></div>
    @include('footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        document.addEventListener("click",function(e){
            if(e.target.classList.contains("galeri-item")){
                const src = e.target.getAttribute("src");
                document.querySelector(".modal-img").src = src;
                const index = e.target.getAttribute("id");
                const tgl = document.getElementsByClassName("tgl-foto")[index];
                document.getElementById("modal-tanggal").innerHTML = tgl.innerHTML;
                const deskripsi = document.getElementsByClassName("deskripsi-foto")[index];
                document.getElementById("modal-deskripsi").innerHTML = deskripsi.innerHTML;
                const myModal = new bootstrap.Modal(document.getElementById('galeri-popup'));
                
            }
            myModal.show();
        })
    </script>
</body>
