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
                                    <label for="icon_penyelenggara">Icon Penyelenggara&nbsp;<span
                                            class="required">*</span></label>
                                            <input type="file" name="icon_penyelenggara" id="icon_penyelenggara" class="form-control"
                                            required="required">
                                </p>
                                <div class="clear"></div>
                                <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                    <label for="nama_penyelenggara">Nama Penyelenggara&nbsp;<span class="required">*</span>
                                    </label>
                                    <input type="text" name="nama_penyelenggara" id="nama_penyelenggara" class="form-control"
                                    required="required" placeholder="Masukkan nama penyelenggara">
                                    <span><em>This will be how your name will be displayed in the account section and in reviews</em></span>
                                </p>
                                <fieldset>
                                    <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                        <label for="kota_penyelenggara">Kota Penyelenggara</label>
                                        <input type="text" name="kota_penyelenggara" id="kota_penyelenggara" class="form-control"
                                    required="required" placeholder="Masukkan kota penyelenggara">
                                    </p>
                                    <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" required="required"
                                    placeholder="Masukkan deskripsi"></textarea>
                                    </p>
                                    <p class="kodory-form-row kodory-form-row--wide form-row form-row-wide">
                                        <label for="jam operasional">Jam Operasional</label>
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
                                <div class="modal-content" style="border-radius: 20px">
                                    <div class="modal-header">
                                        <h4 class="modal-title m-3" id="penyelenggaraLabel">Penyelenggara</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        
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
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
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