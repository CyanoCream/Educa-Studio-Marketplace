@extends('layouts.master2')

@section('content')
<header id="header" class="header style-04">
    <div class="header-middle" style="padding: 40px;">
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
                        <div class="phone-header" style="top: 50px;">
                            <div class="phone-inner">
                                <span class="phone-icon">
                                    <span class="pe-7s-call"></span>
                                </span>
                                <div class="phone-number">
                                    <p>Support & Order</p>
                                   <p><a href="Https://wa.me/6285743736401" class="text-light">085743736401</a></p>
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
        <h1 class="page-title">About</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="/"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>About</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@foreach ($about as $a)
    
@endforeach
<div class="site-main  main-container no-sidebar" style="padding-top:110px;">
    <div class="section-037" style="padding-bottom: 100px;">
        <div class="container">
            <div class="kodory-popupvideo style-01">
                <div class="popupvideo-inner">
                    <div class="icon">
                        <img src="images/{{$a->gambar}}" class="attachment-full size-full" alt="img">
                    </div>
                    <div class="popupvideo-wrap">
                        <h4 class="title">
                            {{$a->judul}} </h4>
                        <p class="desc">{{$a->keterangan}}</p>
                        {{-- <p>Our audience (AKA you) is wonderfully unique. And we do everything we can to help you find
                            your fit, offering our Ciloe Brands in more than 30 sizes – and we’re committed to providing
                            all sizes at the same price</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-006 section-001">
        <div class="container">
            <div class="kodory-slide">
                <div class="owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:60,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;40&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;50&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;60&quot;}}]">
                    <div class="dreaming_single_image dreaming_content_element az_align_center">
                        <figure class="dreaming_wrapper az_figure">
                            <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                    src="{{asset('images/loggo2.1.jpeg')}}"
                                    class="az_single_image-img attachment-full" alt="img" width="200" height="100">
                            </div>
                        </figure>
                    </div>
                    <div class="dreaming_single_image dreaming_content_element az_align_center">
                        <figure class="dreaming_wrapper az_figure">
                            <div class="az_single_image-wrapper   az_box_border_grey effect bounce-in "><img
                                    src="{{asset('images/loggo2.5.jpeg')}}"
                                    class="az_single_image-img attachment-full" alt="img" width="200" height="100">
                            </div>
                        </figure>
                    </div>
                    <div class="dreaming_single_image dreaming_content_element az_align_center">
                        <figure class="dreaming_wrapper az_figure">
                            <div class="az_single_image-wrapper  az_box_border_grey effect bounce-in "><img
                                    src="{{asset('images/loggo2.2.jpeg')}}"
                                    class="az_single_image-img attachment-full" alt="img" width="200" height="100">
                            </div>
                        </figure>
                    </div>
                    <div class="dreaming_single_image dreaming_content_element az_align_center">
                        <figure class="dreaming_wrapper az_figure">
                            <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                    src="{{asset('images/loggo2.3.jpeg')}}"
                                    class="az_single_image-img attachment-full" alt="img" width="200" height="100">
                            </div>
                        </figure>
                    </div>
                    <div class="dreaming_single_image dreaming_content_element az_align_center">
                        <figure class="dreaming_wrapper az_figure">
                            <div class="az_single_image-wrapper az_box_border_grey effect bounce-in "><img
                                    src="{{asset('images/loggo2.4.jpeg')}}"
                                    class="az_single_image-img attachment-full" alt="img" width="200" height="100">
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection