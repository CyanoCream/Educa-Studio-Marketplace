<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Child</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <h4 class="text-light pl-2">{{Auth::user()->name}}</h4>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
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
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <p>
                            Produks
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('daftarDetail_Order')}}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Detail Order</p>
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
                            <a href="{{route('daftarGambar')}}" class="nav-link">
                                <i class="fas fa-image"></i>
                                <p class="m-2">Gambar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('daftarHubungi_Kami')}}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Hubungi Kami</p>
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
                    <a href="{{route('daftarUlasan')}}" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>Ulasan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('daftarUser')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>User</p>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>