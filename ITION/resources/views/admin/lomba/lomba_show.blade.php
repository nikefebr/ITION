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
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Show {{$lomba->judul}}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <form method="post" action="{{ route('destroy lomba', $lomba->id_lomba) }}" >
                        <div class="btn-group">
                          <a class="btn btn-primary" href="{{ route('view lomba') }}">Kembali</button></a>
                          <a class="btn btn-warning" href="{{ route('edit lomba', $lomba->id_lomba) }}">Edit</button></a>
                          @csrf
                          @method('DELETE')
                          <button type="submit"class="btn btn-danger" onclick="confirm('Lomba {{ $lomba->judul }} akan dihapus, lanjutkan?')">Delete</button>
                        </div>
                    
                        
                    
                    
                </div>
                <div class="col">
                    <iframe src="/lomba/{{$lomba->id_lomba}}" height="600" width="1200" title="Iframe Example"></iframe>
                </div>
                
              </div>
              <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
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

<!--page script-->
<script>
    
  </script>

</body>
</html>