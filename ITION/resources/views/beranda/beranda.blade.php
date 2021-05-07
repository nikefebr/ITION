<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')
    
    <div class="bg-blue-gradient">
    <div class="p-3"></div>
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
    @foreach ($data as $item)
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

            <div class="col-md-3 col-sm-6">
                <h5 class="fw-bold">Lihat keseruan lainnya</h5>
                <div class="p-2"></div>

                <div class="card" style="background-color:#F4F4F4; width: 18rem; border:none;">
                    <img src="" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text fw-normal"></p>
                            <p class="card-text fw-bold"></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 px-5">
                <div class="p-4"></div>

                <div class="card" style="background-color:#F4F4F4; width: 18rem; border:none;">
                    <img src="" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text fw-normal"></p>
                            <p class="card-text fw-bold"></p>

                            <div class="p-4"></div>

                            <button class="white-button fw-bolder">Selengkapnya>></button>

                            <div class="p-4"></div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-yellow-ition">
        <div class="container">
            <div class="p-4"></div>

                <h5 class="fw-bold">Yuk ikuti lomba lainnya</h5>

                <div class="row">
                    <div class="col-md-3 col-sm-6">

                        <div class="p-3"></div>

                        <div class="card">
                            <div class="row">
                                <img src="" class="card-img-top" alt="">
                                    <div class="card-img-overlay">
                                        <p class="card-text">Publish </p>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="card-body p-3">
                                        <h5 class="card-text fw-bold text-blue">Judul</h5>
                                        <h6 class="card-text fw-light text-blue">Kategori</h6>
                                        
                                        <p class="card-text text-grey mt-4">
                                            Deskripsi
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="p-5"></div>
    </div>
    <div class="p-5"></div>

    @include('footer')
</body>
</html>