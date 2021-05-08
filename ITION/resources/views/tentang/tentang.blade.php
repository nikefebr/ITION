<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Tentang</title>
</head>
<body>
    @include('navbar')
    
    <div class="p-3"></div>
        <div class="container p-5">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <img src="{{asset('image/image 2.jpeg')}}">
                </div>

                <div class="col-md-2 col-sm-2"></div>

                <div class="col-md-6 col-sm-6">
                <br><br><br><br>          <p class="fw-bold fs-3 text-black">
                        ITION 
                    </p>

                    <p class="text-black">
                    ITION atau IT Competition merupakan website yang dibuat sebagai project 
                    mata kuliah Workshop Produksi Perangkat Lunak Tahun 2021. Website ini 
                    bertujuan guna membantu mahasiswa khususnya Teknik Informatika 
                    dalam mendapatkan informasi lomba di bidang IT. 
                    </p>

                <div class="p-3"></div>
            </div>
        </div>
    </div>
    <br>
                    <p class="fw-bold fs-3 text-black text-center">
                        Nilai Kami
                    </p>
    </div>
<br>

<div class="row" center>
 
<div class="col-sm-2">
<center>
		<div class="card text-center">
		  <div class="card-body">
		    <h5 class="card-title">Memotivasi</h5>
		    <p class="card-text">Mahasiswa mendapat testimoni dari mahasiswa lain yang pernah mengikuti lomba</p>
		    <br>
		  </div>
		</div>
	</div>
 
	<div class="col-sm-2">
		<div class="card text-center">
		  <div class="card-body">
		    <h5 class="card-title">Akurat</h5>
		    <p class="card-text">	Mahasiswa mendapatkan informasi lomba secara akurat</p>
		    <br><br>
		  </div>
		</div>
	</div>
 
	<div class="col-sm-2">
		<div class="card text-center">
		  <div class="card-body">
		    <h5 class="card-title">Integrasi</h5>
		    <p class="card-text">Mahasiswa dapat mencari informasi lomba di dalam satu sistem informasi</p>
		    <br><br>
		  </div>
		</div>
	</div> 
    </center>
    <br><br>
    

    @include('footer')
</body>
</html>