<head>
<<<<<<< Updated upstream
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tentang.css') }}">
=======
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tentang.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
>>>>>>> Stashed changes
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Tentang</title>

    @include('snippets/fonts')
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')
    
    <div class="p-5"></div>
    
    <div class="container">
        <div class="row p-5">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                <img class="img-ition" src="{{asset('image/tentang/ition.png' ) }}">
            </div>

            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12text-ition">
                <p class="fw-bold fs-3 text-black" style="font-family: Montserrat Black;">
                    ITION 
                </p>
                <p class="text-black text-deskripsi" style="font-family: Roboto;">
                    ITION atau IT Competition merupakan website yang dibuat sebagai project mata kuliah Workshop Produksi Perangkat Lunak Tahun 2021. Website ini bertujuan guna membantu mahasiswa khususnya Teknik Informatika dalam mendapatkan informasi lomba di bidang IT. 
                </p>
            </div>
            
            <div class="col-md-2"></div>
        </div>
    
    <div class="p-4"></div>
        <p class="fw-bold fs-3 text-black text-center" >
            Nilai Kami
        </p>
    <div class="p-2"></div>
    
    <div class="content-nilai">
        <div class="row d-flex justify-content-center" data-aos="fade-up">
            <div class="col-md-3 col-sm-6">
                <div class="ps-4 img" >
                    <img src= "{{asset('image/tentang/bump2.png')}}" class=""  alt="" width="130" height="130">
                </div>
        
                <div class="card shadow margin-50" style="background-color:#003567; width: 14rem; height: 15rem; border-radius:30px;">
                    <div class="card-body px-4">
                            <br/> <br/> <br/> <p class="card-text fw-bold text-white" style="font-family: Montserrat Black;">Memotivasi</p>
                            <p class="card-text fw-normal text-white font-14px" style="font-family: Roboto;">Mahasiswa mendapat testimoni dari mahasiswa lain yang pernah mengikuti lomba.</p>
                            <br>
                        </div>
                    </div>
                </div>

            <div class="col-md-3 col-sm-6"> 
                <div class="ps-4 img">
                    <img src= "{{asset('image/tentang/search3.png')}}" class=""  alt=""width="130" height="130">
                </div>
                
                <div class="card shadow margin-50 " style="background-color:#003567; width: 14rem; height: 15rem; border-radius:30px;">
                    <div class="card-body px-4">
                        <br/> <br/> <br/> <p class="card-text fw-bold text-white" style="font-family: Montserrat Black;">Akurat</p>
                        <p class="card-text fw-normal text-white font-14px" style="font-family: Roboto;">Mahasiswa mendapatkan informasi lomba secara akurat.</p>
                        <br><br>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="ps-4 img">
                    <img src= "{{asset('image/tentang/integrasi2.png')}}" class="" alt="" width="130" height="130">
                </div>
                
                <div class="card shadow margin-50" style="background-color:#003567; width: 14rem; height: 15rem; border-radius:30px;">   
                    <div class="card-body px-4"> <br>    
                        <br/> <br/> <p class="card-text fw-bold text-white" style="font-family: Montserrat Black;">Integrasi</p>
                        <p class="card-text fw-normal text-white font-14px" style="font-family: Roboto;">Mahasiswa dapat mencari informasi lomba di dalam satu sistem informasi.</p>
                        <br><br>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="ps-4 img">
                    <img src= "{{asset('image/tentang/collabs3.png')}}" class="" alt="" width="130" height="130">
                </div>
                
                <div class="card shadow margin-50" style="background-color:#003567; width: 14rem; height: 15rem; border-radius:30px;">   
                    <div class="card-body px-4"> <br>    
                        <br/> <br/> <p class="card-text fw-bold text-white" style="font-family: Montserrat Black;">Kolaborasi</p>
                        <p class="card-text fw-normal text-white font-14px" style="font-family: Roboto;">Penyelenggara lomba dapat mendaftarkan lombanya untuk dipublikasikan di website ini.</p>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

    <div class="p-4"></div>
    
    <div class="p-3"></div>

    <p class="fw-bold fs-3 text-black text-center">
        Partner Kami
    </p>
    <br><br>
    <div class="content-partner">
        <div class="row text-center" data-aos="fade-up">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p-2">
                <img class="img-partner" src="{{asset('image/tentang/pens.png' ) }}" width="120" >
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p-2">
                <img class="img-partner" src="{{asset('image/tentang/it.png' ) }}" width="120" >
            </div>
        </div>

    </div>
    

    <div class="p-4"></div>

    <div class="p-4"></div>
        <p class="fw-bold fs-3 text-black text-center">
            Tim Kami
        </p>

    <div class="content-tim p-5" data-aos="fade-up" >
        <div class="bg-white-footer shadow" style="border-radius: 20px;  background-color:#FFFFFF; ">
            <div class="row px-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
                    <div class="p-4"></div>
                    <img src="{{ asset('image/tentang/nike.png')}}" class="card-img-top" alt="" width="225" height="170">
                    
                    <div class="card" style="width: 12rem; border:none;">
                        <div class="card-body pe-0 ps-0">
                            <p class="card-text fw-bold text-black">Nike Nur Amalia F</p>
                            <p class="card-text fw-normal text-black">Product Owner</p>
                            <p class="card-text fw-normal text-black">2103191013</p>
                            <br>
                        </div>
                    </div>
                </div>
                    
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 "> 
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

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
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

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
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

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12  "> 
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

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
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
            </div>
        </div>
        <div class="p-4"></div>
    </div>
 </div>

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