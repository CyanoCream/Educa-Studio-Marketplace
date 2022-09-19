<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">Penyelenggara Child</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            {{-- <h4 class="text-light pl-2">{{Auth::user()->name}}</h4> --}}
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('penyelenggaras')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pp')}}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>Penyelenggara</p>
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
                <li class="nav-item">

                    <a></a>
                </li>
                <form action="{{ route ('logout')}}" method="post">
                    <div>
                        {{ csrf_field() }}
                        <button class="btn btn-lg btn-info btn-block btn-sm" type="submit">
                            <i class="fa fa-reply" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>