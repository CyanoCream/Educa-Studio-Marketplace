@extends('akun.master')

@section('content')
    <header id="header" class="header style-04">
        <div class="header-top">
            <div class="container">
                <div class="header-top-inner">
                    <ul id="menu-top-center-menu" class="kodory-nav top-bar-menu" style="text-align-last: center">
                        <li id="menu-item-864" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-864">
                            <a class="kodory-menu-item-title" title="" href="#"><span
                                    class="icon pe-7s-map-marker"></span>Store Direction</a>
                        </li>
                        <li id="menu-item-865"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-865"><a
                                class="kodory-menu-item-title" title="" href="mailto:chlid6630@gmail.com"><span
                                    class="icon pe-7s-mail"></span>Info@child.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-wrap-stick">
            <div class="header-position">
                <div class="header-nav">
                    <div class="container">
                        <div class="header-nav-inner">
                            <div class="phone-header">
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
        <img src="{{ asset('images/home 1.jpg') }}" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner container">
            <h1 class="page-title">Akun</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin"><a href="#"><span>Home</span></a></li>
                    <li class="trail-item trail-end active"><span>Akun</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card p-5 m-5" style="border-radius: 20px; background: rgb(110,73,158);
    background: linear-gradient(180deg, rgba(110,73,158,1) 0%, rgba(148,35,150,1) 53%, rgba(198,75,75,1) 100%);">
        <div class="card m-2 text-center" style="border-radius: 20px">
            <h2>Akun</h2>
        </div>
        <div class="card p-5 mt-2 mr-5 mb-2 ml-5" style="background-color: gray;border-radius: 20px;">
            @include('edit_profile.index')
            @include('daftar_peserta.index')
            @include('daftar_alamat.index')
        </div>
        <div class="card p-5 mt-2 mr-5 mb-2 ml-5" style="background-color: gray;border-radius: 20px;">
            @include('ubah_password.index')
        </div>
        <div class="card p-5 mt-2 mr-5 mb-2 ml-5" style="background-color: gray;border-radius: 20px;">
            @include('merchant.index')
            @include('product_detail.index')
            @include('status_order.index')
            @include('pengiriman.index')
        </div>
        <div class="card p-5 mt-2 mr-5 mb-2 ml-5" style="background-color: gray;border-radius: 20px;">
            @include('kelas_online.index')
        </div>
        <div class="card p-5 mt-2 mr-5 mb-2 ml-5" style="background-color: gray;border-radius: 20px;">
            @include('ketentuan.index')
            @include('kebijakan_privasi.index')
            @include('hubungi_kami.index')
            @include('tentang_kami.index')
        </div>
        <div class="card m-2 text-center" style="border-radius: 20px">
            <h2><a href="#">Logout</a></h2>
        </div>
    </div>
    <div class="site-main  main-container no-sidebar">
        <div class="section-006 section-001">
            <div class="container">
                <div class="kodory-slide">
                    <div class="owl-slick equal-container better-height"
                        data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:60,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}"
                        data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;40&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;50&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;60&quot;}}]">
                        <div class="dreaming_single_image dreaming_content_element az_align_center">
                            <figure class="dreaming_wrapper az_figure">
                                <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                        src="{{ asset('images/loggo2.1.jpeg') }}"
                                        class="az_single_image-img attachment-full" alt="img" width="200"
                                        height="100">
                                </div>
                            </figure>
                        </div>
                        <div class="dreaming_single_image dreaming_content_element az_align_center">
                            <figure class="dreaming_wrapper az_figure">
                                <div class="az_single_image-wrapper   az_box_border_grey effect bounce-in "><img
                                        src="{{ asset('images/loggo2.5.jpeg') }}"
                                        class="az_single_image-img attachment-full" alt="img" width="200"
                                        height="100">
                                </div>
                            </figure>
                        </div>
                        <div class="dreaming_single_image dreaming_content_element az_align_center">
                            <figure class="dreaming_wrapper az_figure">
                                <div class="az_single_image-wrapper  az_box_border_grey effect bounce-in "><img
                                        src="{{ asset('images/loggo2.2.jpeg') }}"
                                        class="az_single_image-img attachment-full" alt="img" width="200"
                                        height="100">
                                </div>
                            </figure>
                        </div>
                        <div class="dreaming_single_image dreaming_content_element az_align_center">
                            <figure class="dreaming_wrapper az_figure">
                                <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                        src="{{ asset('images/loggo2.3.jpeg') }}"
                                        class="az_single_image-img attachment-full" alt="img" width="200"
                                        height="100">
                                </div>
                            </figure>
                        </div>
                        <div class="dreaming_single_image dreaming_content_element az_align_center">
                            <figure class="dreaming_wrapper az_figure">
                                <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                        src="{{ asset('images/loggo2.4.jpeg') }}"
                                        class="az_single_image-img attachment-full" alt="img" width="200"
                                        height="100">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-040">
            <div class="kodory-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">
                        Follow Us <span></span></h3>
                    <div class="subtitle">
                        @childstore
                    </div>
                </div>
            </div>
            <div class="kodory-instagram style-01">
                <div class="instagram-owl owl-slick"
                    data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:6,&quot;rows&quot;:1}"
                    data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
                    <div class="rows-space-0">
                        <a href="#" class="item">
                            <img class="img-responsive" src="{{ asset('images/poto 1.1.jpg') }}" alt="About">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">1 <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0 <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a href="#" class="item">
                            <img class="img-responsive" src="{{ asset('images/poto 1.2.jpg') }}" alt="About">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">1 <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0 <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a href="#" class="item">
                            <img class="img-responsive" src="{{ asset('images/poto 1.3.jpg') }}" alt="About">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">1 <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0 <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a href="#" class="item">
                            <img class="img-responsive" src="{{ asset('images/poto 1.4.jpg') }}" alt="About">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">1 <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0 <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a href="#" class="item">
                            <img class="img-responsive" src="{{ asset('images/poto 1.5.jpg') }}" alt="About">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">1 <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0 <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a href="#" class="item">
                            <img class="img-responsive" src="{{ asset('images/poto 1.6.jpg') }}" alt="About">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info">1 <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0 <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="footer style-01">
        <div class="section-001 section-009">
            <div class="container">
                <div class="kodory-newsletter style-01">
                    <div class="newsletter-inner">
                        <div class="newsletter-info">
                            <div class="newsletter-wrap">
                                <h3 class="title">News</h3>
                                <h4 class="subtitle">Get Discount 100%</h4>
                                <p class="desc">send your suggestions and criticism</p>
                            </div>
                        </div>
                        <div class="newsletter-form-wrap">
                            <div class="newsletter-form-inner">
                                <input class="email email-newsletter" name="email" placeholder="Enter your email ..."
                                    type="email">
                                <a href="#" class="button btn-submit submit-newsletter">
                                    <span class="text">Subscribe</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-010">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>© Copyright 2022 <a href="#">Child</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="kodory-socials style-01">
                            <div class="content-socials">
                                <ul class="socials-list">
                                    <li>
                                        <a href="https://facebook.com" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="backtotop active">
        <i class="fa fa-angle-double-up"></i>
    </a>
@endsection
