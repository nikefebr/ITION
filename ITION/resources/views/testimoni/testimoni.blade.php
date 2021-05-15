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
            <h2 class="fw-bold mb-5">Gimana sih rasanya ikut ...?</h2>
            <div class="col">
                    <div class="card mb-3 shadow" style="border-radius:30px;">
                        <div class="card-body">
                            <img src="/image/reviewer/Muhammad zaid.jpg" alt="" class=" img-fluid rounded-circle p-3" style="width: 120px; height: 120px;display: block; margin-left: auto; margin-right: auto; z-index:1;">
                            <h5 class="px-3 pt-3 text-bold">Mahdiya Aqila</h5>
                            <p class="px-3 text-bold" style="font-size: 10pt; opacity: 50%;">KMIPN Hackathon </p>
                            <p class="px-3" style="font-size: 10pt;">
                                “Selama saya mengikuti KMIPN, banyak hal yang bisa saya dapatkan. Mulai dari pengalaman, relasi, dan kesempatan - kesempatan emas lainnya. Skill saya jugaberkembang setelah mengikuti lomba tersebut karena telah direview oleh juri yang profesional. “ - Nanang,2018.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 shadow" style="border-radius:30px;">
                        <div class="card-body" >
                            <img src="/image/reviewer/Muhammad zaid.jpg" alt="" class=" img-fluid rounded-circle p-3" style="width: 120px; height: 120px;display: block; margin-left: auto; margin-right: auto;">
                            <h5 class="px-3 pt-3 text-bold">Mahdiya Aqila</h5>
                            <p class="px-3 text-bold" style="font-size: 10pt; opacity: 50%;">KMIPN Hackathon </p>
                            <p class="px-3" style="font-size: 10pt;">
                                “Selama saya mengikuti KMIPN, banyak hal yang bisa saya dapatkan. Mulai dari pengalaman, relasi, dan kesempatan - kesempatan emas lainnya. Skill saya jugaberkembang setelah mengikuti lomba tersebut karena telah direview oleh juri yang profesional. “ - Nanang,2018.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 shadow" style="border-radius:30px;">
                        <div class="card-body">
                            <img src="/image/reviewer/Muhammad zaid.jpg" alt="" class=" img-fluid rounded-circle p-3" style="width: 120px; height: 120px;display: block; margin-left: auto; margin-right: auto;">
                            <h5 class="px-3 pt-3 text-bold">Mahdiya Aqila</h5>
                            <p class="px-3 text-bold" style="font-size: 10pt; opacity: 50%;">KMIPN Hackathon </p>
                            <p class="px-3" style="font-size: 10pt;">
                                “Selama saya mengikuti KMIPN, banyak hal yang bisa saya dapatkan. Mulai dari pengalaman, relasi, dan kesempatan - kesempatan emas lainnya. Skill saya jugaberkembang setelah mengikuti lomba tersebut karena telah direview oleh juri yang profesional. “ - Nanang,2018.
                            </p>
                        </div>
                    </div>
                </div>
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
            <h2 class="fw-bold mb-5">Gimana sih rasanya ikut ...?</h2>
            <div class="col">
                    <div class="card mb-3 shadow" style="border-radius:30px;">
                        <div class="card-body">
                        <img src="/image/reviewer/Muhammad zaid.jpg" alt="" class=" img-fluid rounded-circle p-3" style="width: 120px; height: 120px;display: block; margin-left: auto; margin-right: auto;">
                            <h5 class="px-3 pt-3 text-bold">Mahdiya Aqila</h5>
                            <p class="px-3 text-bold" style="font-size: 10pt; opacity: 50%;">KMIPN Hackathon </p>
                            <p class="px-3" style="font-size: 10pt;">
                                “Selama saya mengikuti KMIPN, banyak hal yang bisa saya dapatkan. Mulai dari pengalaman, relasi, dan kesempatan - kesempatan emas lainnya. Skill saya jugaberkembang setelah mengikuti lomba tersebut karena telah direview oleh juri yang profesional. “ - Nanang,2018.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 shadow" style="border-radius:30px;">
                        <div class="card-body">
                            <img src="/image/reviewer/Muhammad zaid.jpg" alt="" class=" img-fluid rounded-circle p-3" style="width: 120px; height: 120px;display: block; margin-left: auto; margin-right: auto;">
                            <h5 class="px-3 pt-3 text-bold">Mahdiya Aqila</h5>
                            <p class="px-3 text-bold" style="font-size: 10pt; opacity: 50%;">KMIPN Hackathon </p>
                            <p class="px-3" style="font-size: 10pt;">
                                “Selama saya mengikuti KMIPN, banyak hal yang bisa saya dapatkan. Mulai dari pengalaman, relasi, dan kesempatan - kesempatan emas lainnya. Skill saya jugaberkembang setelah mengikuti lomba tersebut karena telah direview oleh juri yang profesional. “ - Nanang,2018.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 shadow" style="border-radius:30px;">
                        <div class="card-body">
                            <img src="/image/reviewer/Muhammad zaid.jpg" alt="" class=" img-fluid rounded-circle p-3" style="width: 120px; height: 120px;display: block; margin-left: auto; margin-right: auto;">
                            <h5 class="px-3 pt-3 text-bold">Mahdiya Aqila</h5>
                            <p class="px-3 text-bold" style="font-size: 10pt; opacity: 50%;">KMIPN Hackathon </p>
                            <p class="px-3" style="font-size: 10pt;">
                                “Selama saya mengikuti KMIPN, banyak hal yang bisa saya dapatkan. Mulai dari pengalaman, relasi, dan kesempatan - kesempatan emas lainnya. Skill saya jugaberkembang setelah mengikuti lomba tersebut karena telah direview oleh juri yang profesional. “ - Nanang,2018.
                            </p>
                        </div>
                    </div>
                </div>
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