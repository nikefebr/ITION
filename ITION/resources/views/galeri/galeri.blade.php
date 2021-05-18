<head>
    <link rel="stylesheet" type="text/css" {{ asset('css/style.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Galeri</title>
</head>
<body style="background-color: #F4F4F4;">
    @include('navbar')
    
    <div class="container">
        <div class="p-5"></div>
        <div class="mt-1"></div>

        <h1 class="fw-bold text-center">Galeri</h1>

        <div class="p-5"></div>
        
        @foreach ($kategori as $kat)
        <div class="row">
            <h1 class="fw-bold">{{$kat->nama_kategori}}</h1>
        </div>
        
        <div class="row">
            <div class="row">
            
                <div class="p-3"></div>
                @foreach ($data[$loop->iteration] as $item)                
                <div class="col-md-4 col-sm-6 float-start">
                    <div class="card" style="background-color:#F4F4F4; width: 18rem; border:none;">
                        <img src="{{ $item->foto }}" class="card-img-top galeri-item" alt="" width="200" height="200" data-toggle="modal" data-target="#galeri-popup">
                            <div class="card-body">
                                <p class="card-text fw-normal">{{ \Carbon\Carbon::parse($item->tgl_foto)->format('d F Y') }}</p>
                                <p class="card-text fw-bold">{{ $item->deskripsi }}</p>

                                <div class="p-4"></div>
                            </div>     
                    </div>
                </div>
                @endforeach
            </div>            
        </div>
        @endforeach
        <!-- Modal -->
        <div class="modal fade" id="galeri-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" class="card-img-top modal-img" alt="" width="100" height="500" >                                        
                </div>
                
            </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        document.addEventListener("click",function(e){
            if(e.target.classList.contains("galeri-item")){
                const src = e.target.getAttribute("src");
                document.querySelector(".modal-img").src = src;
                const myModal = new bootstrap.Modal(document.getElementById('galeri-popup'));
                
            }
            myModal.show();
        })
    </script>
</body>
</html>