<head>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Testimoni</title>
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')

    <div class="pt-5"></div>
    
    <div class="container p-5">
        <div class="row">
            <img class="img-fluid mx-auto" style="width: 800px; height: 450px">
        </div>
    </div>

    <div class="container px-0 ms-5">
        <div class="pt-5"></div>
        <div class="pt-5"></div>
        <div class="pt-5"></div>

        <div class="row ms-5">
            <h2 class="fw-bold">Gimana sih rasanya ikut ...?</h2>
        </div>
        
        <div class="p-5"></div>
        
        <div class="row ms-5">
        @foreach ($data as $item)
            <div class="col-md-4 col-sm-6 float-start">
                <div class="card" style="width: 20rem; height: 27rem;">
                    <div class="row">
                        <img src="{{ url('image/reviewer/'.$item->foto) }}" class="card-img-top rounded-circle" alt="" width="200" height="200">
                    </div>

                    <div class="row">
                        <div class="card-body">
                            <h5 class="card-text fw-bold text-blue">{{ $item->nama }}</h5>
                            <h7 class="card-text fw-bold text-blue">{{ $item->judul }} {{ $item->tahun_lomba }}</h7>
                            <h5 class="card-text fw-normal fst-italic">
                            {{ $item->testimoni }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="p-5"></div>
       
        <div class="row ms-5">
            <h2 class="fw-bold">Gimana sih rasanya ikut ...?</h2>
        </div>
        <div class="p-5"></div>

        <div class="row ms-5">
        @foreach ($data as $item)
            <div class="col-md-4 col-sm-6 float-end">
                <div class="card" style="width: 20rem; height: 27rem;">
                    <div class="row">
                        <img src="{{ url('image/reviewer/'.$item->foto) }}" class="card-img-top rounded-circle" alt="" width="200" height="200">
                    </div>

                    <div class="row">
                        <div class="card-body">
                            <h5 class="card-text fw-bold text-blue">{{ $item->nama }}</h5>
                            <h7 class="card-text fw-bold text-blue">{{ $item->judul }} {{ $item->tahun_lomba }}</h7>        
                            <h5 class="card-text fw-normal fst-italic">
                            {{ $item->testimoni }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="pt-5"></div>
    @include('footer')
</body>
</html>