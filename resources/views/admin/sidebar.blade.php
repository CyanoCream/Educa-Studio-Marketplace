<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="Admin Logo" class="brand-image img-circle elevation-3"
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
                    <a href="#" class="nav-link active">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <p>
                            Produks
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
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
                    <a href="{{route('daftarUlasan')}}" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>Ulasan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('daftarUser')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>User & Penyelenggara</p>
                </li>
                <li class="nav-item">

                    <a></a>
                </li>
                <form action="{{ route ('logout')}}" method="post">
                    <div>
                        {{ csrf_field() }}
                        <button class="btn btn-lg btn-info btn-block btn-sm" type="submit">
                            <i class="fa fa-reply" aria-hidden="true"></i> log out
                        </button>
                    </div>
                </form>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>