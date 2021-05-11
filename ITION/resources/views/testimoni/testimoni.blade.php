<head>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Testimoni</title>
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')

    <div class="p-3"></div>
    
    <div class="container p-5">
        <div class="row">
            <img class="img-fluid mx-auto" style="width: 800px; height: 450px">
        </div>
    </div>

    <div class="container">
        <div class="pt-5"></div>
        <div class="pt-5"></div>
        <div class="pt-5"></div>

        <div class="row">
            <h2 class="fw-bold">Gimana sih rasanya ikut ...?</h2>
        </div>

        <div class="row">
            <div class="row">
                <div class="p-3"></div>

                <div class="col-md-3 col-sm-6 float-start">
                    <div class="card" style="background-color:#F4F4F4; width: 18rem; border:none;">
                        <img src="" class="card-img-top" alt="" width="200" height="200">
                            <div class="card-body">
                                <p class="card-text fw-normal"></p>
                                <p class="card-text fw-bold"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <tabel class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Foto</th>
            <th>Judul Lomba</th>
            <th>Tahun Lomba</th>
            <th>Testimoni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th>{{ $item->nama }}</th>
            <th><img src="{{ url('image/reviewer/'.$item->foto) }}" width="100"></th>
            <th>{{ $item->judul }}</th>
            <th>{{ $item->tahun_lomba }}</th>
            <th>{{ $item->testimoni }}</th>
        </tr>
        @endforeach
    </tbdoy>
    </tabel>
    @include('footer')
</body>
</html>