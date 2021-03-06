<head>
  @include('snippets/fonts')
</head>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #003567; font-family:Roboto;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-dark" style="font-size:x-large; padding-left: 5%">ITION</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->email }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/admin/home') }}" class="{{ (request()->is('admin/home')) ? 'active' : '' }} nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="{{ (request()->is('admin/kategori*')) ? 'active' : '' }} nav-link">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>
                Kategori
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/kategori/create') }}" class="{{ (request()->is('admin/kategori/create')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/kategori') }}" class="{{ (request()->is('admin/kategori')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampilkan data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="{{ (request()->is('admin/lomba*')) ? 'active' : '' }} nav-link">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Lomba
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/lomba/create') }}" class="{{ (request()->is('admin/lomba/create')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/lomba') }}" class="{{ (request()->is('admin/lomba')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampilkan data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="{{ (request()->is('admin/penyelenggara*')) ? 'active' : '' }} nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Penyelenggara Lomba
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/penyelenggara/create') }}" class="{{ (request()->is('admin/penyelenggara/create')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/penyelenggara') }}" class="{{ (request()->is('admin/penyelenggara')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampilkan data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="{{ (request()->is('admin/galeri*')) ? 'active' : '' }}  nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Galeri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/galeri/create') }}" class="{{ (request()->is('admin/galeri/create')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/galeri') }}" class="{{ (request()->is('admin/galeri')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampilkan data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="{{ (request()->is('admin/pelanggan*')) ? 'active' : '' }}{{ (request()->is('admin/newsletter*')) ? 'active' : '' }} nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pelanggan Newsletter
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/pelanggan/create') }}" class="{{ (request()->is('admin/pelanggan/create')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/pelanggan') }}" class="{{ (request()->is('admin/pelanggan')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampilkan data pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/newsletter/create') }}" class="{{ (request()->is('admin/newsletter/create')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Masukkan data newsletter</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/admin/newsletter') }}" class="{{ (request()->is('admin/newsletter')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>histori newsletter</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="{{ (request()->is('admin/reviewer*')) ? 'active' : '' }} nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Reviewer Lomba
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/reviewer/create') }}" class="{{ (request()->is('admin/reviewer/create')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/reviewer') }}" class="{{ (request()->is('admin/reviewer')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampilkan data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="{{ (request()->is('admin/testimoni*')) ? 'active' : '' }} nav-link">
              <i class="nav-icon fas fa-comment-dots"></i>
              <p>
                Testimoni Lomba
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/testimoni/create') }}" class="{{ (request()->is('admin/testimoni/create')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/admin/testimoni') }}" class="{{ (request()->is('admin/testimoni')) ? 'active' : '' }} nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampilkan data</p>
                </a>
              </li>
            </ul>
          </li>


          <!--
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Lomba
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tampilkan data</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
                  -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>