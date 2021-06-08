<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>

    <body>
        <footer class="bg-blue-footer pt-5">
            <div class="container p-5">
                
                <div class="bg-white-footer" style="border-radius: 35px;">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <section class="">
                            <p class="text-black fw-bold fs-5">Ingin berbagi informasi lomba? </p>
                            <p class="text-black fs-6"> Hai, Kami membuka kolaborasi dengan pihak penyelenggara lomba untuk menyebarkan informasilombanya. Tenang saja, layanan kolaborasi kami GRATIS !! Tanpa dipungut biaya :D <br/>
                            </p>
                            <p class="mt-4">
                                Apakah kalian tertarik ?
                            </p>

                            <button class="button-footer fw-bold" onclick="window.open('https://wa.me/6287701437591?text=Halo kak, saya ingin melakukan kolaborasi')">Yuk kolaborasi</button>
                            </section>
                        </div>
                        <div class="col-lg-4 ">
                            <img class="img-hide" src="{{asset('image/footer.png')}}">
                        
                        </div>
                    </div>
                </div>

                <div class="newsletter-area">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 text-area p-5 ">
                            <h4> Dapatkan update lomba setiap minggu !! </h4>
                            Kalian maniak lomba ? Ingin mendapatkan banyak prestasi ?
                            Jangan lewatkan layanan newsletter kami untuk mendapatkan informasi lomba disetiap minggunya. Tunggu apa lagi daftaran email kamu segera !!
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 form-area p-5">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputNama">Nama </label>
                                    <input type="nama" class="form-control" id="exampleInputNama" placeholder="Tuliskan namamu...">
                                </div>
                                <br/>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tuliskan emailmu...">
                                    <small id="emailHelp" class="form-text text-muted">Kami tidak akan menyebarkan data anda</small>
                                </div>
                                <br/>
                                <button type="submit" class="btn btn-warning button-footer btn-newsletter">Dapatkan notifikasi</button>
                            </form>
                        </div>
                    </div>
                        
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p class="text-white fw-bold contact"> 
                            Contact Person Admin 
                        </p>
                        <p class="text-white wa"> 
                            WA : +6287701437591 <br>
                            Email : infoITION@gmail.com 
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="contact">
                                    <ul class="ul-top">
                                        <li class="round-btn"><a href="#">
                                            <img class="btn-img" src="{{asset('logo/1200px-Instagram_logo_2016 1.png')}}">
                                        </a></li>
                                        <li class="round-btn"><a href="mailto:infoITION@gmail.com">
                                            <img class="btn-img" src="{{asset('logo/logo-gmail 1.png')}}">
                                        </a></li>
                                        <li class="round-btn btn-wa"><a ref="https://wa.me/6287701437591">
                                            <img class="btn-img" src="{{asset('logo/WhatsApp-Logo 1.png')}}">
                                        </a></li>
                                    </ul>   
                                                                        
                                    <ul class="ul-bottom">
                                        <li class="btn-items-bottom">
                                            <img class="white-logo-pens" src="{{asset('logo/Logo_PENS putih.png')}}"/>
                                            <img class="white-logo-himit" src="{{asset('logo/Putih.png')}}"/> </li>
                                    </ul>
                            </div>
                        </div>
				</div>

                <p class="text-white text-center fw-bold">
                    Copyright ITION 2021
                </p>
			</div>	
        </footer>
    
    </body>
</html>