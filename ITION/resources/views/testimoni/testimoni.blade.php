<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tentang.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Testimoni</title>

    @include('snippets/fonts')
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')

    <div class="pt-5"></div>
    <div class="pt-3"></div>

        <img class="bg-testimoni2" src="{{asset('image/banner.png')}}">
    </div>
    <div class="container px-0 ms-5">
        <div class="pt-5"></div>
        <div class="pt-5"></div>

        @foreach ($kategori as $kat)
        <div class="row ms-5" data-aos="fade-up">
            <h2 class="fw-bold mb-5  fs-3" style="font-family: Montserrat;">Gimana sih rasanya ikut lomba {{$kat->nama_kategori}}?</h2>
            @foreach ($data[$loop->iteration] as $item)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="card mb-3 shadow" style="border-radius:30px; width: 20rem; height: 27rem;">
                        <div class="card-body">
                        <img src="{{ url('image/reviewer/'.$item->foto) }}" alt="" class=" img-fluid rounded-circle p-3" style="width: 120px; height: 120px;display: block; margin-left: auto; margin-right: auto;">
                            <h5 class="px-3 pt-3 fw-bold" style="font-family: Roboto;">{{ $item->nama }}</h5>
                            <p class="px-3 text-bold" style="font-size: 10pt; opacity: 50%;" style="font-family: Roboto;">{{$item->nama_kategori}} {{ $item->judul }} {{ $item->tahun_lomba }}</p>
                            <p class="px-3" style="font-size: 10pt;" style="font-family: Roboto;">
                                “{{ $item->testimoni }}.“ - {{ $item->nama }},{{ $item->angkatan }}.
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="p-5"></div>
        @endforeach
        
    </div>
    <div class="pt-5"></div>
    @include('footer')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
          <script>
            AOS.init({
                offset :150,
                duration :500,
                easing: 'ease'
            });
          </script>
</body>
</html>