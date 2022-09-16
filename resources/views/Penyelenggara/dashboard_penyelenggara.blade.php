@extends('Penyelenggara.master_penyelenggara')

@section('content')
<header id="header" class="header style-04">

    <div class="header-middle" style="padding: 45px">
        <div class="container">
            <div class="header-middle-inner">
                <div class="header-logo-menu">
                    <div class="block-menu-bar">
                        <a class="menu-bar menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-wrap-stick">
        <div class="header-position">
            <div class="header-nav">
                <div class="container">
                    <div class="kodory-menu-wapper"></div>
                    <div class="header-nav-inner">
                        <div class="phone-header" style="top:50px;">
                            <div class="phone-inner">
                                <span class="phone-icon">
                                    <span class="pe-7s-call"></span>
                                </span>
                                <div class="phone-number">
                                    <p>Support & Order</p>
                                    <p>085743736401</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="banner-wrapper has_background">
    <img src="{{asset('images/home 1.jpg')}}" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner container">
        <h1 class="page-title">Penyelenggara</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="#"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Penyelenggara</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content" style="box-shadow: none;">
                    <div class="kodory p-5">
                        <div class="tab-head">
                            <ul class="tabs dreaming-tabs" role="tablist">
                                <li class="penyelenggara_penyelenggara_tab active"
                                    id="tab-title-penyelenggara_penyelenggara" role="tab"
                                    aria-controls="tab-penyelenggara_penyelenggara">
                                    <a href="#tab-penyelenggara_penyelenggara">Penyelenggara</a>
                                </li>
                                <li class="penyelenggara_produk_tab" id="tab-title-penyelenggara_produk" role="tab"
                                    aria-controls="tab-penyelenggara_produk">
                                    <a href="#tab-penyelenggara_produk">Produk</a>
                                </li>
                                <li class="penyelenggara_gambar_tab" id="tab-title-penyelenggara_gambar" role="tab"
                                    aria-controls="tab-penyelenggara_gambar">
                                    <a href="#tab-penyelenggara_gambar">Gambar</a>
                                </li>
                            </ul>
                        </div>

                        <!--penyelenggara-->
                        <div class="kodory-Tabs-panel kodory-Tabs-panel--penyelenggara_penyelenggara panel entry-content kodory-tab"
                            id="tab-penyelenggara_penyelenggara" role="tabpanel"
                            aria-labelledby="tab-title-penyelenggara_penyelenggara">
                            <div class="card-body p-2">
                                <table class="table-update" {{-- id="data-table" --}}>
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>id produk</th>
                                            <th>icon penyelenggara</th>
                                            <th>nama penyelenggara</th>
                                            <th>kota penyelenggara</th>
                                            <th>deskripsi</th>
                                            <th>jam operasional</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    {{-- <tbody>
                                        @foreach ($penyelenggaras as $penyelenggara)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $penyelenggara->produk }}</td>
                                            <td><img src="/images/{{ $penyelenggara->icon_penyelenggara}}" alt="" width="100px">
                                            </td>
                                            <td>{{ $penyelenggara->nama_penyelenggara }}</td>
                                            <td>{{ $penyelenggara->kota_penyelenggara }}</td>
                                            <td>{{ $penyelenggara->deskripsi }}</td>
                                            <td>{{ $penyelenggara->jam_operasional }}</td>
                                            <td>
                                                <a onclick="edit(this)"
                                                    data-url="{{route('editPenyelenggara', ['id' => $penyelenggara->id])}}"
                                                    class="btn btn-warning btn-sm" role="button">Edit</a>
                                                <a onclick="confirmDelete(this)"
                                                    data-url="{{route('deletePenyelenggara', ['id' => $penyelenggara->id])}}"
                                                    class="btn btn-danger btn-sm" role="button">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody> --}}
                                </table>
                            </div>
                        </div>

                        <!--produk-->
                        <div class="kodory-Tabs-panel kodory-Tabs-panel--penyelenggara_produk panel entry-content kodory-tab"
                            id="tab-penyelenggara_produk" role="tabpanel"
                            aria-labelledby="tab-title-ppenyelenggara_produk">
                            <div class="card-body p-2">
                                <table class="table-update" {{-- id="data-table" --}}>
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>kategori</th>
                                            <th>nama produk</th>
                                            <th>harga produk</th>
                                            <th>status pertemuan</th>
                                            <th>stock</th>
                                            <th>pertemuan</th>
                                            <th>waktu temu</th>
                                            <th>umur</th>
                                            <th>keterangan</th>
                                            <th>manfaat</th>
                                            <th>bundling</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    {{-- <tbody>
                                        @foreach ($produks as $produk)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $produk->kategori }}</td>
                                            <td>{{ $produk->nama_produk }}</td>
                                            <td>{{ $produk->harga_produk }}</td>
                                            <td>{{ $produk->status_pertemuan }}</td>
                                            <td>{{ $produk->stock }}</td>
                                            <td>{{ $produk->pertemuan }}</td>
                                            <td>{{ $produk->waktu_temu }}</td>
                                            <td>{{ $produk->umur }}</td>
                                            <td>{{ $produk->keterangan }}</td>
                                            <td>{{ $produk->manfaat }}</td>
                                            <td>{{ $produk->bundling }}</td>
                                            <td>
                                                <a onclick="edit(this)"
                                                    data-url="{{route('editProduk', ['id' => $produk->id])}}"
                                                    class="btn btn-warning btn-sm" role="button">Edit</a>
                                                <a onclick="confirmDelete(this)"
                                                    data-url="{{route('deleteProduk', ['id' => $produk->id])}}"
                                                    class="btn btn-danger btn-sm" role="button">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody> --}}
                                </table>
                            </div>
                        </div>

                        <!--gambar-->
                        <div class="kodory-Tabs-panel kodory-Tabs-panel--penyelenggara_gambar panel entry-content kodory-tab"
                            id="tab-penyelenggara_gambar" role="tabpanel"
                            aria-labelledby="tab-title-penyelenggara_gambar">
                            <div class="card-body p-2">
                                <table class="table-update" {{-- id="data-table" --}}>
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>gambar</th>
                                            <th>id produk</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    {{-- <tbody>
                                        @foreach ($gambars as $gambar)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td><img src="/images/{{ $gambar->gambar }}" alt="" width="100px"></td>
                                            <td>{{ $gambar->id_produk }}</td>
                                            <td>
                                                <a onclick="edit(this)"
                                                    data-url="{{route('editGambar', ['id' => $gambar->id])}}"
                                                    class="btn btn-warning btn-sm" role="button">Edit</a>
                                                <a onclick="confirmDelete(this)"
                                                    data-url="{{route('deleteGambar', ['id' => $gambar->id])}}"
                                                    class="btn btn-danger btn-sm" role="button">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody> --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    save = function (button) {
        swal({
            title: "Sukses",
            icon: "success",
            button: false,
        });
    }
</script>
@endsection