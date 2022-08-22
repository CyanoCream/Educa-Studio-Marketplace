<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
            {{-- <a href="{{route('')}}" class="brand-link">
                <img src="{{asset('')}}" alt="img"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{config('app.name')}}</span>
            </a> --}}
            <div class="sidebar">
                {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex" height="100%">
                    <div class="image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="poto">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div> --}}

                {{-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('dashboard')}}" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('daftarDetail_Order')}}" class="nav-link">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                <p>Detail Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="far fa-image"></i>
                                <p>Gambar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                <p>Hubungi Kami</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <p>Keranjang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="fab fa-first-order"></i>
                                <p>Order</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                <p>Password Reset</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="fab fa-intercom"></i>
                                <p>Pelanggan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="fa fa-sitemap" aria-hidden="true"></i>
                                <p>Penyelenggara</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <p>Peserta</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="fab fa-product-hunt"></i>
                                <p>Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="fab fa-rev"></i>
                                <p>Ulasan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="far fa-user"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{-- {{route('')}} --}}" class="nav-link">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                <p>Varian</p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>