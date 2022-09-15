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
                        <nav class="kodory-MyAccount-navigation">
                            <ul>
                                <li class="kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-address">
                                    <a href="" data-toggle="modal" data-target="#penyelenggara">Penyelenggara</a>
                                </li>
                                <li class="kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders ">
                                    <a href="" data-toggle="modal" data-target="#produk">Produk</a>
                                </li>
                                <li class="kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--downloads">
                                    <a href="" data-toggle="modal" data-target="#gambar">Gambar</a>
                                </li>
                            </ul> 
                        </nav>
                        <div class="kodory-MyAccount-content">
                            <div class="kodory-notices-wrapper"></div>
                            <form class="kodory-EditAccountForm edit-account" method="post">
                                <div class="clear"></div>
                                <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                    <h5 class="d-flex justify-content-between">
                                        Icon Penyelenggara : <a>{{ Auth::user()->icon_penyelenggara }}</a>
                                    </h5>
                                    <input type="file" name="icon_penyelenggara" id="icon_penyelenggara" class="form-control"
                                    required="required">
                                </p>
                                <div class="clear"></div>
                                <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                    <h5 class="d-flex justify-content-between">
                                        Nama Penyelenggara : <a>{{ Auth::user()->nama_penyelenggara }}</a>
                                    </h5>
                                    <input type="text" name="nama_penyelenggara" id="nama_penyelenggara" class="form-control"
                                    required="required" placeholder="Masukkan nama penyelenggara">
                                    <span><em>This will be how your name will be displayed in the account section and in reviews</em></span>
                                </p>
                                <fieldset>
                                    <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                        <h5 class="d-flex justify-content-between">
                                            Kota Penyelenggara : <a>{{ Auth::user()->kota_penyelenggara }}</a>
                                        </h5>
                                        <input type="text" name="kota_penyelenggara" id="kota_penyelenggara" class="form-control"
                                    required="required" placeholder="Masukkan kota penyelenggara">
                                    </p>
                                    <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                        <h5 class="d-flex justify-content-between">
                                            Deskripsi :<a>{{ Auth::user()->deskripsi }}</a>
                                        </h5>
                                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" required="required"
                                    placeholder="Masukkan deskripsi"></textarea>
                                    </p>
                                    <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                        <h5 class="d-flex justify-content-between">
                                            Jam Operasional :<a>{{ Auth::user()->jam_operasional }}</a>
                                        </h5>
                                        <input type="text" name="jam_operasional" id="jam_operasional" class="form-control"
                                    required="required">
                                    </p>
                                </fieldset>
                                <div class="clear"></div>
                                <p>
                                    <button type="submit" onclick="save(this)" class="btn btn-primary">Simpan</button>
                                </p>
                            </form>
                        </div>

                        <!--penyelenggara-->
                        <div class="modal fade" id="penyelenggara" tabindex="-1" aria-labelledby="penyelenggaraLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content p-5" style="border-radius: 20px;">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="penyelenggaraLabel">Penyelenggara</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="id_produk">id produk</label>
                                            <input type="text" name="id_produk" id="id_produk" class="form-control" required="required" placeholder="Masukkan id produk">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="icon_penyelenggara">icon penyelenggara</label>
                                            <input type="file" name="icon_penyelenggara" id="icon_penyelenggara" class="form-control" required="required" placeholder="Masukkan icon penyelenggara">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="nama_penyelenggara">nama penyelenggara</label>
                                            <input type="text" name="nama_penyelenggara" id="nama_penyelenggara" class="form-control" required="required" placeholder="Masukkan nama penyelenggara">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="kota_penyelenggara">kota penyelenggara</label>
                                            <input type="text" name="kota_penyelenggara" id="kota_penyelenggara" class="form-control" required="required" placeholder="Masukkan kota penyelenggara">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="deskripsi">deskripsi</label>
                                            <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" required="required" placeholder="Masukkan deskripsi"></textarea>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="jam_operasional">jam operasional</label>
                                            <input type="text" name="jam_operasional" id="jam_operasional" class="form-control" required="required" placeholder="Masukkan jam operasional">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--produk-->
                        <div class="modal fade" id="produk" tabindex="-1" aria-labelledby="produkLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="border-radius: 20px">
                                    <div class="modal-header">
                                        <h4 class="modal-title m-3" id="produkLabel">Produk</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="kategori">kategori</label>
                                            <input type="text" name="kategori" id="kategori" class="form-control" required="required"
                                                placeholder="Masukkan kategori">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="nama_produk">nama produk</label>
                                            <input type="text" name="nama_produk" id="nama_produk" class="form-control"
                                                required="required" placeholder="Masukkan nama_produk">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="harga_produk">harga produk</label>
                                            <input type="text" name="harga_produk" id="harga_produk" class="form-control"
                                                required="required" placeholder="Masukkan harga_produk">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="status_pertemuan">status pertemuan</label>
                                            <input type="text" name="status_pertemuan" id="status_pertemuan" class="form-control"
                                                required="required" placeholder="Masukkan status_pertemuan">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="stock">stock</label>
                                            <input type="text" name="stock" id="stock" class="form-control" required="required"
                                                placeholder="Masukkan stock">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="pertemuan">pertemuan</label>
                                            <input type="text" name="pertemuan" id="pertemuan" class="form-control" required="required"
                                                placeholder="Masukkan pertemuan">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="waktu_temu">waktu temu</label>
                                            <input type="text" name="waktu_temu" id="waktu_temu" class="form-control"
                                                required="required" placeholder="Masukkan waktu_temu">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="umur">umur</label>
                                            <input type="text" name="umur" id="umur" class="form-control" required="required"
                                                placeholder="Masukkan umur">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="keterangan">keterangan</label>
                                            <textarea name="keterangan" id="keterangan" rows="3" class="form-control"
                                                required="required" placeholder="Masukkan keterangan"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="manfaat">manfaat</label>
                                            <textarea name="manfaat" id="manfaat" rows="3" class="form-control" required="required"
                                                placeholder="Masukkan manfaat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="bundling">bundling</label>
                                            <input type="text" name="bundling" id="bundling" class="form-control" required="required"
                                                placeholder="Masukkan bundling">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--gambar-->
                        <div class="modal fade" id="gambar" tabindex="-1" aria-labelledby="gambarLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="border-radius: 20px">
                                    <div class="modal-header">
                                        <h4 class="modal-title m-3" id="gambarLabel">Gambar</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="gambar">gambar</label>
                                            <input type="file" name="gambar" id="gambar" class="form-control" required="required" placeholder="Masukkan gambar">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="id_produk">id produk</label>
                                            <input type="text" name="id_produk" id="id_produk" class="form-control" required="required" placeholder="Masukkan id_produk">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        {{-- <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button> --}}
                                        <button type="submit" onclick="save(this)" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                                    </div>
                                </div>
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