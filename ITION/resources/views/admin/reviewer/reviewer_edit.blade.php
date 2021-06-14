
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

  <!-- add header -->
  @include('admin.layout.header')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- add navbar display -->
  @include('admin.layout.navbar')
 
  <!-- add sidebar -->
  @include('admin.layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 p-3 mb-4">
              <h1 class="m-0">Data Reviewer Lomba</h1>
            </div><!-- /.col -->
            

            <div class="col-12">
              <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Tambah Reviewer baru</h3>

                  @if ($errors->any())
                    @foreach ($errors->all() as $error)
                      <p class="alert alert-danger card-text">{{$error}}</p>
                    @endforeach
                  @endif
                  
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action='{{ route('update reviewer', $reviewer->id_reviewer) }}' enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama">Nama Reviewer</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="{{ $reviewer->nama }}" placeholder="Nama Reviewer">
                    </div>

                    <div class="form-group">
                      <label for="angkatan">Angkatan</label>
                      <select class="form-control" id='angkatan' name="angkatan">
  
                        @for ($year = (int)date('Y'); 2001 <= $year; $year--)
                          <option value="{{$year}}">{{$year}}</option>
                        @endfor
  
                        <option value="{{ $reviewer->angkatan }}" selected >{{ $reviewer->angkatan }}</option>
  
                       </select>
                    </div>
                  
                    <div class="form-group">
                      <label for="input foto">Foto</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="foto" name="foto" value="{{ $reviewer->foto }}">
                          <label for="foto" class="custom-file-label">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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

    $('#foto').on('change',function () {

    var filename = $(this).val();

   $(this).next('.custom-file-label').html(filename);
   
 });


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