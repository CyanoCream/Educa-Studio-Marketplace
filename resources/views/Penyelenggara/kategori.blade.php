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
                <li class="trail-item trail-end active"><span>Edit Account</span>
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
                                    <a href="penyelenggara-kategori">Kategori</a>
                                </li>
                                <li class="kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders ">
                                    <a href="/penyelenggara-produk">Produk</a>
                                </li>
                                <li class="kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--downloads">
                                    <a href="/penyelenggara-gambar">Gambar</a>
                                </li>
                                <li class="kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-address">
                                    <a href="/penyelenggara">Penyelenggara</a>
                                </li>
                            </ul> 
                        </nav>
                        <div class="kodory-MyAccount-content">
                            <div class="kodory-notices-wrapper"></div>
                            <form class="kodory-EditAccountForm edit-account" method="post">
                                <p class="kodory-form-row kodory-form-row--first form-row form-row-first">
                                    <label for="account_first_name">Id&nbsp;<span
                                            class="required">*</span></label>
                                    <input type="text" class="kodory-Input kodory-Input--text input-text"
                                           name="account_first_name" id="account_first_name" autocomplete="given-name"
                                           value="Annie">
                                </p>
                                <p class="kodory-form-row kodory-form-row--last form-row form-row-last">
                                    <label for="account_last_name">Nama_Kategori&nbsp;<span
                                            class="required">*</span></label>
                                    <input type="text" class="kodory-Input kodory-Input--text input-text"
                                           name="account_last_name" id="account_last_name" autocomplete="family-name"
                                           value="Taylor">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection