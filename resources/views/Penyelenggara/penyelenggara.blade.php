@extends('layouts.master2')

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
    <img src="{{asset('images/home 1.jpg')}}"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner container">
        <h1 class="page-title">Edit Account</h1>
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
                <div class="page-main-content">
                    <div class="kodory">
                        <nav class="kodory-MyAccount-navigation">
                            <ul>
                                <li class="kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--dashboard">
                                    <a href="{{route('daftarKategori')}}">Kategori</a>
                                </li>
                                <li class="kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders ">
                                    <a href="{{route('daftarProduk')}}">Produk</a>
                                </li>
                                <li class="kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--downloads">
                                    <a href="{{route('daftarGambar')}}">Gambar</a>
                                </li>
                                <li class="kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-address">
                                    <a href="{{Route('daftarPenyelenggara')}}">Penyelenggara</a>
                                </li>
                            </ul> 
                        </nav>
                        <div class="kodory-MyAccount-content">
                            <div class="kodory-notices-wrapper"></div>
                            <form class="kodory-EditAccountForm edit-account" method="post">
                                {{-- <p class="kodory-form-row kodory-form-row--first form-row form-row-first">
                                    <label for="account_first_name">Id&nbsp;<span
                                            class="required">*</span></label>
                                    <input type="text" class="kodory-Input kodory-Input--text input-text"
                                           name="account_first_name" id="account_first_name" autocomplete="given-name"
                                           value="Annie">
                                </p> --}}
                                <p class="kodory-form-row kodory-form-row--last form-row form-row-wide">
                                    <label for="id_produk">Id Produk&nbsp;<span
                                            class="required">*</span></label>
                                            <input type="text" name="id_produk" id="id_produk" class="form-control"
                                            required="required" placeholder="Masukkan id produk">
                                </p>
                                <div class="clear"></div>
                                <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                    <label for="account_display_name">Nama Penyelenggara&nbsp;<span class="required">*</span></label>
                                    <input type="text" name="nama_penyelenggara" id="nama_penyelenggara" class="form-control"
                                    required="required" placeholder="Masukkan nama penyelenggara">
                                    <span><em>This will be how your name will be displayed in the account section and in reviews</em></span>
                                </p>
                                <div class="clear"></div>
                                <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                    <label for="account_email">Icon Penyelenggara&nbsp;<span
                                            class="required">*</span></label>
                                            <input type="file" name="icon_penyelenggara" id="icon_penyelenggara" class="form-control"
                                            required="required">
                                </p>
                                <fieldset>
                                    <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                        <label for="password_current">Kota Penyelenggara</label>
                                        <input type="text" name="kota_penyelenggara" id="kota_penyelenggara" class="form-control"
                                    required="required" placeholder="Masukkan kota penyelenggara">
                                    </p>
                                    <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                        <label for="password_1">Deskripsi</label>
                                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" required="required"
                                    placeholder="Masukkan deskripsi"></textarea>
                                    </p>
                                    <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                        <label for="jam operasional">Jam Operasional</label>
                                        <input type="time" name="jam_operasional" id="jam_operasional" class="form-control"
                                    required="required">
                                    </p>
                                </fieldset>
                                <div class="clear"></div>
                                <p>
                                    <input type="hidden" id="save-account-details-nonce"
                                           name="save-account-details-nonce" value="">
                                    <input type="hidden" name="_wp_http_referer" value="">
                                    <button type="submit" class="kodory-Button button" name="save_account_details"
                                            value="Save changes">Save changes
                                    </button>
                                    <input type="hidden" name="action" value="save_account_details">
                                </p>
                            </form>
                        </div>
                        <div class="card-body p-0">
                            <table class="table-update text-center" id="data-table" enctype="multipart/form-data">
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
                                            <td>{{ $penyelenggara->id_produk }}</td>
                                            <td>{{ $penyelenggara->nama_penyelenggara }}</td>
                                            <td>{{ $penyelenggara->icon_penyelenggara }}</td>
                                            <td>{{ $penyelenggara->kota_penyelenggara }}</td>
                                            <td>{{ $penyelenggara->deskripsi }}</td>
                                            <td>{{ $penyelenggara->jam_operasional }}</td>
                                            <td>
                                                <a href="{{route('editPenyelenggara', ['id' => $penyelenggara->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
                                                <a onclick="confirmDelete(this)" data-url="{{route('deletePenyelenggara', ['id' => $penyelenggara->id])}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
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
</main>
@endsection