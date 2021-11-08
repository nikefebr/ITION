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
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0" style="font-family: Montserrat;">View data kategori</h1>
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
                <div class="col-12">
                    <div class="card">
                            @if ($message = Session::get('success'))
                            <div class="card-header">
                            <p class="alert alert-success card-text">{{ $message }}</p>
                           </div>
                            @endif
                            @if ($errors->any())
                              @foreach ($errors->all() as $error)
                            <div class="card-header">
                            <p class="alert alert-danger card-text">{{$error}}</p>
                            </div>
                                @endforeach
                            @endif
                          
                          
                        <div class="card-header">
                          <h3 class="card-title" style="font-family: Montserrat;">Daftar Kategori</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Kategori</th>
                              <th width="200px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i = 0;
                            @endphp 
                            @foreach ($category as $kategori)
                            <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $kategori->nama_kategori }}</td>
                              <td>
                                <form method="post" action="{{ route('destroy kategori', $kategori->id_kategori) }}" >
                                <div class="btn-group">
                                  <a class="btn btn-warning" href="{{ route('edit kategori', $kategori->id_kategori) }}">Edit</button></a>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"class="btn btn-danger" onclick="return(confirm('Kategori yang dibuat akan dihapus\nPastikan data lomba sudah dihapus semua'))">Delete</button>
                                </div>
                              </form>
                              </td>
                            </tr>
                            @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                </div>
                <!-- /.col -->
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

  @include('admin.layout.view-script')
</body>
</html>