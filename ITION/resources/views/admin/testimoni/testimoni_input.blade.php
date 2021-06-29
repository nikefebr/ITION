
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

  <!-- add header -->
  @include('admin.layout.header')
  @include('snippets/fonts')

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
              <h1 class="m-0" style="font-family: Montserrat;">Edit Testimoni</h1>
            </div><!-- /.col -->
            

            <div class="col-12">
              <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header" style="background-color: #003567">
                  <h3 class="card-title" style="font-family: Montserrat;">Tambah Testimoni Baru</h3>

                  @if ($errors->any())
                    @foreach ($errors->all() as $error)
                      <p class="alert alert-danger card-text">{{$error}}</p>
                    @endforeach
                  @endif
                  
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action='/admin/testimoni'>
                  @csrf
                  <div class="card-body">
                  <div class="form-group">
                    <label for="id_penyelenggara">Nama Lomba</label>
                    <select class="form-control" id='id_lomba' name="id_lomba">

                      @foreach ($manylomba as $lomba)
                        <option value="{{$lomba->id_lomba}}">{{$lomba->judul}}</option>
                      @endforeach

                     </select>
                  </div>

                  <div class="form-group">
                    <label for="id_penyelenggara">Nama Reviewer</label>
                    <select class="form-control" id='id_reviewer' name="id_reviewer">

                      @foreach ($manyreviewer as $reviewer)
                        <option value="{{$reviewer->id_reviewer}}">{{$reviewer->nama}}</option>
                      @endforeach

                     </select>
                  </div>

                  <div class="form-group">
                    <label for="angkatan">Tahun Lomba</label>
                    <select class="form-control" id='tahun_lomba' name="tahun_lomba">

                      @for ($year = (int)date('Y'); 2001 <= $year; $year--)
                        <option value="{{$year}}">{{$year}}</option>
                      @endfor

                      <option value="2000" selected >2000</option>

                     </select>
                  </div>

                  <div class="form-group">
                    <label>Isi Testimoni</label>
                    <textarea class="form-control" id='testimoni' name="testimoni" rows="3" placeholder="Testimoni" value=""></textarea>
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