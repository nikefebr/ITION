<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lomba.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title>Detail Lomba</title>
    @include('snippets/fonts')
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')
    @foreach ($data as $item)
    <div class="p-4"></div>

    <div class="bg-overlay px-5">
        <button class="button-exit fw-bolder text-blue-2" onclick="window.location='{{ url("lomba") }}'">
            <img class="mx-auto image-fluid" src="{{asset('logo/exit.png')}}">
        </button>

        
            <div class="mx-auto card-dlomba" style="width: 65rem; border-radius:10px">
                <div class="row px-5 pt-5 pb-0">
                    <div class="col-md-8 col-sm-5">
                        <div class="card-body">
                            <h1 class="card-text fw-bold text-blue" style="font-family: Montserrat;">{{ $item->judul }}</h1>
                            <h4 class="card-text fw-bold text-blue" style="font-family: Montserrat;">{{ $item->nama_kategori }}</h4>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-5">
                        <div class="card-body text-center ps-5">
                            <h5 class="card-text fw-bold text-blue ps-5" style="font-family: Montserrat;">DEADLINE <br>
                                PENDAFTARAN</h5>

                            <div class="pt-3"></div>
                            
                            <h5 class="card-text mt-4 ps-5 fw-bold" style="font-family: Roboto;">
                                {{ \Carbon\Carbon::parse($item->deadline)->format('d F Y') }}
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="row px-5 pt-0">
                    <div class="col-md-2 col-sm-6">
                        <div class="card-body">
                            <p class="card-text fw-normal font-14px" style="font-family: Roboto;">
                            {{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}
                            </p>

                            <p class="card-text font-14px text-uppercase" style="font-family: Roboto;">
                                
                            </p>
                        </div>
                    </div>

                    <div class="col-md-1 col-sm-6" style="border: 10px; border-color:black"></div>

                    <div class="col-md-2 col-sm-6">
                        <div class="card-body">
                            <p class="card-text fw-normal font-14px" style="font-family: Roboto;">
                                KATEGORI
                            </p>

                            <p class="card-text font-14px text-uppercase" style="font-family: Roboto;">
                                {{ $item->nama_kategori }}
                            </p>

                        </div>
                    </div>

                    <div class="p-2"></div>
                </div>
            </div>
    </div>

    <div class="p-5"></div>

<div class="container ">
    
    <div class="">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-5">
                <h1 class="fw-bold" style="font-family: Montserrat;">Deskripsi</h1>
                <div class="p-2"></div>
                <img src="{{ url('image/lomba/'.$item->poster) }}" class="img-fluid mx-auto">
            </div>

            <div class="col-lg-4 col-sm-5" ></div>
        </div>

            <section>   
                <div class="" id="sticky_scrolled">
                    <div class="px-3 pt-3 card text-blue-3" style="width: 20rem; border-radius: 10px; background-color: rgba(0, 53, 103, 0.1)">
                        <h5 class="font-16px px-3 pt-3">Tunggu apa lagi ayo daftar Lomba {{ $item->nama_kategori }} sekarang :D <br><br>
                        Informasi CP : <br>
                        WA. +{{ $item->kontak }} ({{ $item->nama_kontak }}) <br>
                        </h5>
                        <a href="https://wa.me/{{ $item->kontak }}" class="font-16px px-3">Klik disini untuk menghubungi <br> CP !</a>

                        <div class="p-3"></div>

                        <div class="font-14px">
                            <button class="button-daftar-lomba fw-bolder" onclick="window.open('{{ $item->link_website }}')" style="font-family: Roboto;">Daftar Sekarang</button>
                        </div>
                    </div>

                    <div class="p-4"></div>

                    <div class="font-14px">
                            <button class="white-button-daftar fw-bolder" onclick="window.open('{{ $item->link_panduan }}')">
                            <img src="{{asset('logo/unduh.png')}}"class="img-fluid mx-auto pe-3" style="font-family: Roboto;">Buku Panduan</button>
                    </div>
                </div>
            </section>
        </div>



        <div class="p-3"></div>

        <div class="row text-areas ">
            <h5 class="fw-normal text-body" style="font-family: Roboto;">{{ $item->deskripsi }}</h5>

            <div class="p-3"></div>
                    <div class="col-lg-12">
                        <h1 class="fw-bold text-title" style="font-family: Montserrat;">Syarat Lomba</h1>
                        <div class="p-2"></div>
                        <h5 class="fw-normal text-body " style="font-family: Roboto;">{!! nl2br(e($item->syarat)) !!}</h5>
                    </div>
                <div class="p-3"></div>

                <div class="col-lg-12">
                    <h1 class="fw-bold text-title" style="font-family: Montserrat;">Timeline</h1>
                    <div class="p-2"></div>
                    <h5 class="fw-normal text-body" style="font-family: Roboto;">{!! nl2br(e($item->timeline)) !!}</h5>
                </div>        

                <div class="p-3"></div>

                <div class="col-lg-12">
                    <h1 class="fw-bold text-title" style="font-family: Montserrat;">Biaya Pendaftaran</h1>
                    <div class="p-2"></div>
                    <h5 class="fw-normal text-body" style="font-family: Roboto;">{{ $item->biaya }}</h5>
                </div>


                <div class="p-3"></div>

                <div class="col-lg-12">
                    <h1 class="fw-bold text-title" style="font-family: Montserrat;">Juara + Hadiah</h1>
                    <div class="p-2"></div>
                    @if(!empty($item->hadiah_juara_1))
                    <h5 class="fw-normal text-body" style="font-family: Roboto;">Juara 1 : {{ $item->hadiah_juara_1 }}</h5>
                    @endif
                    @if(!empty($item->hadiah_juara_2))
                    <h5 class="fw-normal text-body" style="font-family: Roboto;">Juara 2 : {{ $item->hadiah_juara_2 }}</h5>
                    @endif
                    @if(!empty($item->hadiah_juara_3))
                    <h5 class="fw-normal text-body" style="font-family: Roboto;">Juara 3 : {{ $item->hadiah_juara_3 }}</h5>
                    @endif
                    @if(!empty($item->lainnya))
                    <h5 class="fw-normal text-body" style="font-family: Roboto;">{{ $item->lainnya }}</h5>
                    @endif
                </div>
            </div>
        </div>
    <div class="p-4"></div>
    @endforeach
    <div class="p-4"></div>
    
    @include('footer')

    <script type="text/javascript">
        window._addEventListeners("scroll",function(){
            var component = document.querySelector("section");
            component.classList.toggle("sticky",window.scrollY > 0);
        })
    </script>

</body>
</html>