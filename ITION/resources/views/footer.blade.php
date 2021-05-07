<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>

    <body>
        <footer class="bg-blue-footer pt-5">
            <div class="container p-4">
                
                <div class="bg-white-footer" style="border-radius: 35px;">
                    <section class="">
                    <p class="text-black fw-bold">Ingin berbagi informasi lomba? </p>
                    <p class="text-black"> Hai, Kami membuka kolaborasi dengan pihak penyelenggara lomba untuk menyebarkan informasi <br> 
                        lombanya. Tenang saja, layanan kolaborasi kami GRATIS !! tanpa dipungut biaya :D <br>
                    </p>
                    <p>
                        Apakah kalian tertarik ?
                    </p>

                    <button class="button-footer fw-bold" onclick="window.open('https://wa.me/6287701437591?text=Halo kak,')">Yuk kolaborasi</button>
                    </section>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <p class="text-white fw-bold contact"> 
                            Contact Person Admin 
                        </p>
                        <p class="text-white wa"> 
                            WA : +6287701437591 <br>
                            Email : infoITION@gmail.com 
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 px-6"></div>

                    <div class="col-md-4 col-sm-6 px-6">
                        <div class="col-md-12">
                            <div class="">
                                <div class="contact text-center">
                                    <ul>
                                        <li class="round-btn btn-items"><a href="#">
                                            <img class="" src="{{asset('logo/1200px-Instagram_logo_2016 1.png')}}">
                                        </a></li>
                                        <li class="round-btn btn-items"><a href="mailto:infoITION@gmail.com">
                                            <img src="{{asset('logo/logo-gmail 1.png')}}">
                                        </a></li>
                                        <li class="round-btn btn-items"><a href="https://wa.me/6287701437591">
                                            <img src="{{asset('logo/WhatsApp-Logo 1.png')}}">
                                        </a></li>
                                    </ul>   
                                                                        
                                    <ul>
                                        <li class="btn-items top-footer">
                                            <img src="{{asset('logo/Logo_PENS putih.png')}}">
                                            <img src="{{asset('logo/Putih.png')}}">
                                        </li>
                                    </ul>
                                </div>
                            </div>
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