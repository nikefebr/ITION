<head>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Tentang</title>
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')
    
    <div class="p-5"></div>
    
    <div class="container p-5" bg-white-ition>
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('image/tentang/ition.jpeg' ) }}" width="270" >
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
                </p>
            </div>
            
            <div class="col-md-2"></div>
        </div>
    </div>
    
    <div class="p-4"></div>
        <p class="fw-bold fs-3 text-black text-center">
            Nilai Kami
        </p>
    <div class="p-4"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12" ></div>
        
            <div class="col-md-3 col-sm-6 ">
                <div class="p-4"></div>

                <div class="card shadow" style="background-color:#003567; width: 15rem; height: 16rem; border-radius:30px;">
                    <div class="card-body px-4">
                        <br> <p class="card-text fw-bold text-white">Memotivasi</p>
                        <p class="card-text fw-normal text-white">Mahasiswa mendapat testimoni dari mahasiswa lain yang pernah mengikuti lomba.</p>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-8"> 
                <div class="p-4"></div>  
                
                <div class="card shadow" style="background-color:#003567; width: 15rem; height: 16rem; border-radius:30px;">
                    <div class="card-body px-4">
                        <br><p class="card-text fw-bold text-white">Akurat</p>
                        <p class="card-text fw-normal text-white">Mahasiswa mendapatkan informasi lomba secara akurat.</p>
                        <br><br>
                    </div>
                </div>
            </div>

            <div class="col-md-2 col-sm-12">
                <div class="p-4"></div>
                
                <div class="card shadow" style="background-color:#003567; width: 15rem; height: 16rem; border-radius:30px;">   
                    <div class="card-body px-4"> <br>    
                        <p class="card-text fw-bold text-white">Integrasi</p>
                        <p class="card-text fw-normal text-white">Mahasiswa dapat mencari informasi lomba di dalam satu sistem informasi.</p>
                        <br><br>
                    </div>
                </div>
            </div>
        
            <div class="col-md-3"></div>
        </div>
    </div>

    <div class="p-4"></div>
    
    <div class="p-3"></div>

    <p class="fw-bold fs-3 text-black text-center">
        Partner Kami
    </p>
    <br><br>

    <div class="row">
        <div class="col-md-4"></div>
        
        <div class="col-md-3">
            <img src="{{asset('image/tentang/pens.png' ) }}" width="120" ></div>
        
        <div class="col-md-4">
            <img src="{{asset('image/tentang/it.png' ) }}" width="120" ></div>
        <div class="col-md-1"> </div>
    </div>


    <div class="p-4"></div>

    <div class="p-4"></div>
        <p class="fw-bold fs-3 text-black text-center">
            Tim Kami
        </p>
    </div>

    <div class="container p-5" >
        <div class="bg-white-footer shadow" style="border-radius: 20px;  background-color:#FFFFFF; ">
            <div class="row">
                <div class="col-md-2 col-sm-12"></div>

                <div class="col-md-3 col-sm-6 ">
                    <div class="p-4"></div>
                    
                    <img src="{{ asset('image/tentang/nike.png')}}" class="card-img-top" alt="" width="225" height="170">
                    
                    <div class="card" style="width: 12rem; border:none;">
                        <div class="card-body">
                            <p class="card-text fw-bold text-black">Nike Nur Amalia F</p>
                            <p class="card-text fw-normal text-black">Product Owner</p>
                            <p class="card-text fw-normal text-black">2103191013</p>
                            <br>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-3 col-sm-8"> 
                    <div class="p-4"></div>  
                    
                    <img src="{{ asset('image/tentang/aqila.png')}}" class="card-img-top" alt="" width="230" height="170">
                    
                    <div class="card" style="width: 12rem; border:none;">
                        <div class="card-body">
                            <p class="card-text fw-bold text-black">Mahdiya Aqila</p>
                            <p class="card-text fw-normal text-black">Developer</p>
                            <p class="card-text fw-normal text-black">2103191015</p>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12">
                    <div class="p-4"></div>
                    
                    <img src="{{ asset('image/tentang/arita.png')}}" class="card-img-top" alt="" width="230" height="170">
                    
                    <div class="card" style="width: 12rem; border:none;">
                        <div class="card-body">
                            <p class="card-text fw-bold text-black">Arita Fitrianingsih</p>
                            <p class="card-text fw-normal text-black">Developer</p>
                            <p class="card-text fw-normal text-black">2103191006</p>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-2"></div>
            </div>

            <div class="row">
                <div class="col-md-2 col-sm-12" ></div>
                
                <div class="col-md-3 col-sm-6 ">
                    <div class="p-4"></div>
                    
                    <img src="{{ asset('image/tentang/aldo.png')}}" class="card-img-top" alt="" width="250" height="150">
                    
                    <div class="card" style="width: 12rem; border:none;">
                        <div class="card-body">
                            <p class="card-text fw-bold text-black">Aldo Faiz Winarno</p>
                            <p class="card-text fw-normal text-black">Developer</p>
                            <p class="card-text fw-normal text-black">2103191004</p>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-8"> 
                    <div class="p-4"></div>  
                    
                    <img src="{{ asset('image/tentang/fagi.png')}}" class="card-img-top" alt="" width="250" height="150">
                    
                    <div class="card" style="width: 12rem; border:none;">
                        <div class="card-body">
                            <p class="card-text fw-bold text-black">Muhammad Fagi</p>
                            <p class="card-text fw-normal text-black">Developer</p>
                            <p class="card-text fw-normal text-black">2103191020</p>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12">
                    <div class="p-4"></div>
                    
                    <img src="{{ asset('image/tentang/rafif.png')}}" class="card-img-top" alt="" width="250" height="150">
                    
                    <div class="card" style="width: 12rem; border:none;">
                        <div class="card-body">
                            <p class="card-text fw-bold text-black">Muhammad Rafiif F</p>
                            <p class="card-text fw-normal text-black">Developer</p>
                            <p class="card-text fw-normal text-black">2103191023</p>
                            <br>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

    @include('footer')
</body>
</html>