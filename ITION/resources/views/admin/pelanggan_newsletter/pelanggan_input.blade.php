
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
              <h1 class="m-0" style="font-family: Montserrat;">Pelanggan Newsletter</h1>
            </div><!-- /.col -->
            

            <div class="col-12">
              <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header" style="background-color: #003567">
                  <h3 class="card-title" style="font-family: Montserrat;">Tambah Pelanggan Newsletter</h3>

                  @if ($errors->any())
                    @foreach ($errors->all() as $error)
                      <p class="alert alert-danger card-text">{{$error}}</p>
                    @endforeach
                  @endif
                  
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action='/admin/pelanggan'>
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="email">Email Pelanggan</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama">Nama Pelanggan</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pelanggan">
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