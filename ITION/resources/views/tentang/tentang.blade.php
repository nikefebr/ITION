<head>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Tentang</title>
</head>
<body>
    @include('navbar')
    
    <div class="p-5"></div>
    
    <div class="container p-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('image/ition.jpeg' ) }}" width="270" >
            </div>
           
            <div class="col-md-7">
                <p class="fw-bold fs-3 text-black">
                    ITION 
                </p>
                <p class="text-black">
                    ITION atau IT Competition merupakan website yang dibuat sebagai project <br>
                    mata kuliah Workshop Produksi Perangkat Lunak Tahun 2021. Website ini<br>
                    bertujuan guna membantu mahasiswa khususnya Teknik Informatika <br>
                    dalam mendapatkan informasi lomba di bidang IT. 
                </p></div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    
    <div class="p-4"></div>
        <p class="fw-bold fs-3 text-black text-center">
            Nilai Kami
        </p>
    <div class="p-4"></div>

    <div class="row">
        <div class="col-md-3"></div>
        
        <div class="col-md-2"> <img src= "{{asset('image/image 1.png')}}" class="rounded-circle img-thumbnail">
            <h5>Memotivasi</h5>
            <span>Mahasiswa mendapat testimoni dari mahasiswa lain yang pernah mengikuti lomba.</span>
        </div>

        <div class="col-md-2">   
            <img src= "{{asset('image/image 1.png')}}" class="rounded-circle img-thumbnail">
                <h4>Akurat</h4>
                <span> Mahasiswa mendapatkan informasi lomba secara akurat.</span>    
        </div>

        <div class="col-md-2">
            <img src= "{{asset('image/image 1.png')}}" class="rounded-circle img-thumbnail">
                <h4>Integrasi</h4>
                <span>Mahasiswa dapat mencari informasi lomba di dalam satu sistem informasi.</span>
        </div>

        <div class="col-md-3"></div>
    </div>

    <div class="p-4"></div>
    
    <div class="p-3"></div>

    <p class="fw-bold fs-3 text-black text-center">
        Partner Kami
    </p>
    <br><br>

    <div class="row">
        <div class="col-md-4"> </div>
        <div class="col-md-3">
            <img src="{{asset('image/pens.png' ) }}" width="120" ></div>
        <div class="col-md-4">
            <img src="{{asset('image/it.png' ) }}" width="120" ></div>
        <div class="col-md-1"> </div>
    </div>


    <div class="p-4"></div>

    <div class="p-4"></div>
        <p class="fw-bold fs-3 text-black text-center">
            Tim Kami
        </p>
    </div>

    <div class="container p-5">
        <div class="bg-white-footer" style="border-radius: 35px;">
            <div class="row">
                <div class="row">
                    <div class="col-md-3"></div>
                    
                    <div class="col-md-2"> <img src= "{{asset('image/image 1.png')}}"class="rounded-circle img-thumbnail" >
                        <h5>Nike</h5>
                        <span>deksripsi</span>
                    </div>
                    
                    <div class="col-md-2">   
                        <img src= "{{asset('image/image 1.png')}}" class="rounded-circle img-thumbnail">
                            <h4>Aqila</h4>
                            <span>deskripsi</span>    
                    </div>
                    
                    <div class="col-md-2">
                        <img src= "{{asset('image/image 1.png')}}" class="rounded-circle img-thumbnail">
                            <h4>Arita</h4>
                            <span>deskripsi</span>
                    </div>
                    
                    <div class="col-md-3"></div>
                </div>
            </div> 
        </div>
    </div>

    @include('footer')
</body>
</html>