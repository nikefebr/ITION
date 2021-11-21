
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

  @include('admin.layout.crop-image')

  <!-- add header -->
  @include('admin.layout.header')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- add navbar display -->
  @include('admin.layout.navbar')
 
  <!-- add sidebar -->
  @include('admin.layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="font-family: Roboto;">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 p-3 mb-4">
              <h1 class="m-0" style="font-family: Montserrat;">Data Lomba</h1>
            </div><!-- /.col -->
            

            <div class="col-12">
              <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header" style="background-color: #003567">
                  <h3 class="card-title" style="font-family: Montserrat;">Tambah Lomba baru</h3>

                  @if ($errors->any())
                    @foreach ($errors->all() as $error)
                      <p class="alert alert-danger card-text">{{$error}}</p>
                    @endforeach
                  @endif
                  
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action='/admin/lomba' enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group"> 

                      <div class="form-group">
                        <label for="judul">Judul Lomba</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Lomba">
                      </div>

                      <div class="form-group">
                      <label for="input poster">Gambar Poster</label>
                      <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="poster" name="poster">
                            <label for="poster" class="custom-file-label">Choose file</label>
                          </div>
                      </div>
                      </div>

                      <div class="form-group">
                        <label for="id_kategori">Kategori</label>
                        <select class="form-control" id='id_kategori' name="id_kategori">
  
                          @foreach ($manykategori as $kategori)
                            <option value="{{$kategori->id_kategori}}">{{$kategori->nama_kategori}}</option>
                          @endforeach

                         </select>
                      </div>

                      <div class="form-group">
                        <label for="id_penyelenggara">Penyelenggara Lomba</label>
                        <select class="form-control" id='id_penyelenggara' name="id_penyelenggara">
  
                          @foreach ($manypenyelenggara as $penyelenggara)
                            <option value="{{$penyelenggara->id_penyelenggara}}">{{$penyelenggara->nama_penyelenggara}}</option>
                          @endforeach

                         </select>
                      </div>

                      <div class="form-group">
                        <label for="link_website">Link Website</label>
                        <input type="text" class="form-control" id="link_website" name="link_website" placeholder="Link Website">
                      </div>

                      <div class="form-group">
                        <label for="link_panduan">Link Panduan</label>
                        <input type="text" class="form-control" id="link_panduan" name="link_panduan" placeholder="Link Panduan">
                      </div>
                      
                      <div class="form-group">
                        <label for="tahun">Tahun Lomba</label>
                        <select class="form-control" id='tahun' name="tahun">
  
                          @for ($year = (int)date('Y')+15; (int)date('Y') <= $year; $year--)
                            <option value="{{$year}}">{{$year}}</option>
                          @endfor
  
                          <option value="{{(int)date('Y')}}" selected >{{(int)date('Y')}}</option>
  
                         </select>
                      </div>

                      <div class="form-group">
                        <label for="deadline">Deadline</label>
                        <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Deadline">
                      </div>

                      <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" id='deskripsi' name="deskripsi" rows="3" placeholder="Deskripsi" value=""></textarea>
                      </div>

                      <div class="form-group">
                        <label>Syarat</label>
                        <textarea class="form-control" id='syarat' name="syarat" rows="3" placeholder="Syarat" value=""></textarea>
                      </div>

                      <div class="form-group">
                        <label>Timeline</label>
                        <textarea class="form-control" id='timeline' name="timeline" rows="3" placeholder="Timeline" value=""></textarea>
                      </div>

                      <div class="form-group">
                        <label for="biaya">Biaya</label>
                        <input type="text" class="form-control" id="biaya" name="biaya" placeholder="Biaya">
                      </div>

                      <div class="form-group">
                        <label for="hadiah_juara_1">Hadiah juara 1</label>
                        <input type="text" class="form-control" id="hadiah_juara_1" name="hadiah_juara_1" placeholder="Hadiah juara 1">
                      </div>

                      <div class="form-group">
                        <label for="hadiah_juara_2">Hadiah juara 2</label>
                        <input type="text" class="form-control" id="hadiah_juara_2" name="hadiah_juara_2" placeholder="Hadiah juara 2">
                      </div>
                      
                      <div class="form-group">
                        <label for="hadiah_juara_3">Hadiah juara 3</label>
                        <input type="text" class="form-control" id="hadiah_juara_3" name="hadiah_juara_3" placeholder="Hadiah juara 3">
                      </div>

                      <div class="form-group">
                        <label for="lainnya">Hadiah lainnya</label>
                        <input type="text" class="form-control" id="lainnya" name="lainnya" placeholder="Lainnya">
                      </div>
                    </div>                  
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary" style="background-color: #FFDE27; color:#212529; border:0;">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->  
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- add footer -->
  @include('admin.layout.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

 <script src="{{ asset('js/app.js') }}"></script>
 <script>
    $('#poster').on('change',function () {
   var filename = $(this).val();

   $(this).next('.custom-file-label').html(filename);
   
 });

 $("#judul").keyup(function(){
    update();
});

$("#biaya").val($('#biaya').val() + "Rp ");

function update() {
  $("#deskripsi").val($('#judul').val() + " merupakan ");
}

 </script>
<!-- 
     jQuery 
<script src="plugins/jquery/jquery.min.js"></script>
     Bootstrap 4 
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
     AdminLTE App 
<script src="dist/js/adminlte.min.js"></script>
-->
</body>
</html>
