<aside class="main-sidebar sidebar-dark-primary elevation-4 min-vh-100 h-100">

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link m-1">
              <i class="fa fa-tasks" aria-hidden="true"></i>
              <p class="m-2">Produks</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('daftarDetail_Order')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Detail Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('daftarKategori')}}" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('daftarKeranjang')}}" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Keranjang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('daftarOrder')}}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('daftarProduk')}}" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>Produk</p>
                </a>
              </li>
              <li class="nav-item m-1">
                <a href="" class="nav-link">
                  <i class="fa fa-spinner" aria-hidden="true"></i>
                  <p class="m-2">Varian</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('daftarGambar')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>Gambar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('daftarHubungi_Kami')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Hubungi Kami</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>Password Reset</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('daftarPelanggan')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('daftarPenyelenggara')}}" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>Penyelenggara</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('daftarPeserta')}}" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>Peserta</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('daftarUlasan')}}" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>Ulasan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>User</p>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>