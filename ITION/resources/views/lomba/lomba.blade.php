<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lomba.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/kalender.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.7.2/main.css' rel='stylesheet' /> -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.7.2/main.min.js'></script>
    
    <title>Lomba</title>
</head>

<body style="background-color: #F4F4F4;">
    @include('navbar')
    
    <div class="bg-blue-gradient">
    <div class="p-3"></div>
        <div class="container p-5">
            <div class="row">
                <img class="img-fluid mx-auto" src="{{asset('image/lomba.png')}}" style="width: 800px; height: 450px">
            </div>

            <div class="p-5"></div>
            <div class="p-1"></div>

            <div class="row text-white">
                <h4 class="fw-bold text-center">Keuntungan sering mengikuti lomba</h4>
                
                <div class="p-5"></div>

                <div class="row fw-bold text-center">
                    <div class="col-md-3 col-sm-6">
                        <p>Langkah untuk menjadi<br>
                            Mawapres</p>
                        <img src="{{asset('logo/mawapres-white.png')}}">
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <p>Personal Branding</p>
                        <img src="{{asset('logo/branding-white.png')}}">
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <p>Membuat<br>
                            CV lebih menarik</p>
                        <img src="{{asset('logo/cv-white.png')}}">
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <p>Mengasah skillmu</p>
                        <img src="{{asset('logo/skill-white.png')}}">
                    </div>

                    <div class="p-1"></div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="p-5"></div>
        <div class="mt-1"></div>
        
        <h1 class="fw-bold text-center">Ikuti Lomba</h1>
        <div class="p-4"></div>
        
        <div class="content-section">
            

            <div class="card-place">
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-lg-6 col-md-12 col-sm-12 p-5 ">
                        <div class="card" style="width: 19rem; height: 530px; border-radius:20px">
                            <div class="">
                                <img src="{{ url('image/lomba/'.$item->poster) }}" class="card-img" alt="" style="border-radius: 20px 20px 0px 0px; max-width: 300px; height: 370px;">
                                <p class="card-text ps-3 text-grey pt-2">{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }} </p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-text fw-bold text-blue font-12px">{{ $item->judul }}</h5>
                                <h6 class="card-text fw-light text-blue font-12px">{{ $item->nama_kategori }}</h6>
                                
                                <p class="card-text text-grey mt-4 font-12px">
                                {{ \Illuminate\Support\Str::limit($item->deskripsi, 25, $end='...') }}
                                </p>
                                    
                            <div class="card-body bg-blue-2 text-center blue-box">
                                <p class="card-text fw-bold text-blue text-white font-12px">DEADLINE <br>
                                PENDAFTARAN</p>

                                <div class="p-0"></div>
                                
                                <p class="card-text mt-4 text-white font-12px text-uppercase">
                                {{ \Carbon\Carbon::parse($item->deadline)->format('d F Y') }}
                                </p>
                            </div>
                            <div> </div>
                            <button class="button-katalog fw-bolder text-blue-2 card-button" onclick="window.location='{{ url("lomba/$item->id_lomba") }}'">Daftar Lomba Ini</button>
                            
                        </div>
                    </div>      
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="filter-place">
            <div class="container">
                <div class="input-group rounded">
                    <form type="get" action="{{ url('lomba') }}">
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fa fa-search"></i>
                        </span>
                        <input name = "query" type="search" class="form-control rounded border-0" placeholder="cari lombamu disini" aria-label="Search" aria-describedby="search-addon" />
                    </form>
                </div>
                <br>  
                
                <div class="card" style="border-radius:8px;">                        
                    <div class="card-header" style="background-color:#003567; font:20px ; color:white ;border-radius: 8px 8px 0px 0px; font-weight:bold;">Kalender</div>
                        <div class="card-body px-0 mx-0 " style="margin-bottom: 90px">
                            <div class="pt-0" id="calendar">
                            </div>
                            <!-- <div class="pt-3">
                                <button type="button" class="btn btn-primary float-end" data-toggle="modal" data-target="#exampleModal" style="background-color: #FFDE27; color: black; border: none;">
                                    See More..
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
                
                <br>
                <br>
                <br>

                <div class="card" style="border-radius:8px;">                        
                    <div class="card-header" style="background-color:#003567; font:20px ; color:white ;border-radius: 8px 8px 0px 0px; font-weight:bold;">Filter</div>
                        <form type="get" action="{{ url('lomba') }}" id="cari">
                            <div class="card-body">
                                <div class="form-group fw-bold" >
                                    <label for="kategori"  >Kategori<br></label>
                                    <select name="kategori" class="form-control" placeholder="Pilih Kategori" form="cari">
                                        <option selected disabled>Pilih Kategori</option>    
                                        @foreach ($kategori as $row)
                                        <option value="{{$row->id_kategori}}" {{ ($row->id_kategori == $selectedKategori) ? 'selected' : '' }}>{{$row->nama_kategori}}</option>
                                        @endforeach
                                    </select><br>                                    
                                </div>
                                <div class="form-group fw-bold">
                                    <label for="bulan">Bulan</label>
                                    <select name="bulan" class="form-control" placeholder="Pilih Bulan" form="cari">
                                        <option selected disabled>Pilih Bulan</option>    
                                        @foreach ($bulan as $noBulan=>$namaBulan)
                                        <option value="{{$noBulan}}" {{ ($noBulan == $selectedBulan) ? 'selected' : '' }}>{{$namaBulan}}</option>
                                        @endforeach
                                    </select>
                                </div>    
                                <div class="p-3"></div>
                                <center> <button class="button-lomba fw-bolder " type="submit">Cari Lomba</button></center><br>                                
                            </div>
                        </form>
                    </div>
                </div>       
            </div>
        </div>
    </div>

    <div class="p-5"></div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kalender</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <div id="calender"></div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="p-5"></div>
    <div class="p-5"></div>
    <div class="p-5"></div>

    @include('footer')

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
            
            initialView: 'dayGridMonth',
            events :  [
                @foreach ($data as $item)
                {
                    title : '{{$item->judul}}',
                    start : '{{$item->deadline}}'
                },
                @endforeach
            ],
            });
            calendar.render();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calender');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            
            initialView: 'dayGridMonth',
            events :  [
                @foreach ($data as $item)
                {
                    title : '{{$item->judul}}',
                    start : '{{$item->deadline}}'
                },
                @endforeach
            ],
        });
        calendar.render();
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>