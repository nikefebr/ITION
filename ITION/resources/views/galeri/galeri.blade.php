<head>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Galeri</title>
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')
    
    <div class="container">
        <div class="p-5"></div>
        <div class="mt-1"></div>

        <h1 class="fw-bold text-center">Galeri</h1>

        <div class="p-5"></div>
        
        @foreach ($kategori as $kat)
        <div class="row">
            <h1 class="fw-bold">{{$kat->nama_kategori}}</h1>
        </div>
        
        <div class="row">
            <div class="row">
            
                <div class="p-3"></div>
                @foreach ($data[$loop->iteration] as $item)                
                <div class="col-md-4 col-sm-6 float-start">
                    <div class="card" style="background-color:#F4F4F4; width: 18rem; border:none;">
                        <img src="{{ $item->foto }}" class="card-img-top" alt="" width="200" height="200">
                            <div class="card-body">
                                <p class="card-text fw-normal">{{ \Carbon\Carbon::parse($item->tgl_foto)->format('d F Y') }}</p>
                                <p class="card-text fw-bold">{{ $item->deskripsi }}</p>

                                <div class="p-4"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    @include('footer')
</body>
</html>