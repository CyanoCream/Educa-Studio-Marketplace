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
<div class="site-main  main-container no-sidebar" style="padding-top:110px;">
    <div class="section-037">
        <div class="container">
            <div class="kodory-popupvideo style-01">
                <div class="popupvideo-inner">
                    <div class="icon">
                        <img src="{{asset('images/home.jpg')}}" class="attachment-full size-full" alt="img">
                    </div>
                    <div class="popupvideo-wrap">
                        <h4 class="title">
                            Who we are </h4>
                        <p class="desc">We believe in a world where you have total freedom to be you, without judgement.
                            To experiment. To express yourself. To be brave and grab life as the extraordinary adventure
                            it is. So we make sure everyone has an equal chance to discover all the amazing things
                            they’re capable of – no matter who they are, where they’re from or what looks they like to
                            boss.</p>
                        <p>Our audience (AKA you) is wonderfully unique. And we do everything we can to help you find
                            your fit, offering our Ciloe Brands in more than 30 sizes – and we’re committed to providing
                            all sizes at the same price</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-001">
        <div class="container">
            <div class="kodory-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">
                        Meet Our Team <span></span></h3>
                    <div class="subtitle">
                        A perfect blend of creativity
                    </div>
                </div>
            </div>
            <div class="kodory-slide">
                <div class="owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <div class="kodory-team style-01">
                        <div class="team-inner">
                            <div class="thumb-avatar">
                                <a href="#" target="_self" tabindex="0">
                                    <img src="{{asset('images/ab 1.jpg')}}"
                                         class="attachment-full size-full" alt="img"></a>
                                <div class="list-social">
                                    <a href="#" tabindex="0"><i class="az_tta-icon fa fa-facebook"></i></a>
                                    <a href="#" tabindex="0"><i class="az_tta-icon fa fa-twitter"></i></a>
                                    <a href="#" tabindex="0"><i class="az_tta-icon fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="content-team">
                                <h3 class="name">
                                    <a href="#" target="_self" tabindex="0">
                                        Annie Taylor </a>
                                </h3>
                                <p class="positions">Operations</p>
                            </div>
                        </div>
                    </div>
                    <div class="kodory-team style-01">
                        <div class="team-inner">
                            <div class="thumb-avatar">
                                <a href="#" target="_self" tabindex="0">
                                    <img src="{{asset('images/ab 2.jpg')}}"
                                         class="attachment-full size-full" alt="img"> </a>
                                <div class="list-social">
                                    <a href="#" tabindex="0"><i class="az_tta-icon fa fa-facebook"></i></a>
                                    <a href="#" tabindex="0"><i class="az_tta-icon fa fa-twitter"></i></a>
                                    <a href="#" tabindex="0"><i class="az_tta-icon fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="content-team">
                                <h3 class="name">
                                    <a href="#" target="_self" tabindex="0">
                                        Ayomide Regan </a>
                                </h3>
                                <p class="positions">Marketing Personal</p>
                            </div>
                        </div>
                    </div>
                    <div class="kodory-team style-01">
                        <div class="team-inner">
                            <div class="thumb-avatar">
                                <a href="#" target="_self" tabindex="0">
                                    <img src="{{asset('images/ab 3.jpg')}}"
                                         class="attachment-full size-full" alt="img"> </a>
                                <div class="list-social">
                                    <a href="#" tabindex="0"><i class="az_tta-icon fa fa-facebook"></i></a>
                                    <a href="#" tabindex="0"><i class="az_tta-icon fa fa-twitter"></i></a>
                                    <a href="#" tabindex="0"><i class="az_tta-icon fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="content-team">
                                <h3 class="name">
                                    <a href="#" target="_self" tabindex="0">
                                        Violet Frase </a>
                                </h3>
                                <p class="positions">Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="kodory-team style-01">
                        <div class="team-inner">
                            <div class="thumb-avatar">
                                <a href="#" target="_self" tabindex="-1">
                                    <img src="{{asset('images/ab 4.jpg')}}"
                                         class="attachment-full size-full" alt="img"> </a>
                                <div class="list-social">
                                    <a href="#" tabindex="-1"><i class="az_tta-icon fa fa-facebook"></i></a>
                                    <a href="#" tabindex="-1"><i class="az_tta-icon fa fa-twitter"></i></a>
                                    <a href="#" tabindex="-1"><i class="az_tta-icon fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="content-team">
                                <h3 class="name">
                                    <a href="#" target="_self" tabindex="-1">
                                        Frank Greer </a>
                                </h3>
                                <p class="positions">Operations</p>
                            </div>
                        </div>
                    </div>
                    <div class="kodory-team style-01">
                        <div class="team-inner">
                            <div class="thumb-avatar">
                                <a href="#" target="_self" tabindex="-1">
                                    <img src="{{asset('images/ab 5.jpg')}}"
                                         class="attachment-full size-full" alt="img"> </a>
                                <div class="list-social">
                                    <a href="#" tabindex="-1"><i class="az_tta-icon fa fa-facebook"></i></a>
                                    <a href="#" tabindex="-1"><i class="az_tta-icon fa fa-twitter"></i></a>
                                    <a href="#" tabindex="-1"><i class="az_tta-icon fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="content-team">
                                <h3 class="name">
                                    <a href="#" target="_self" tabindex="-1">
                                        Mark Tucker </a>
                                </h3>
                                <p class="positions">Partner</p>
                            </div>
                        </div>
                    </div>
                    <div class="kodory-team style-01">
                        <div class="team-inner">
                            <div class="thumb-avatar">
                                <a href="#" target="_self" tabindex="-1">
                                    <img src="{{asset('images/ab 6.jpg')}}"
                                         class="attachment-full size-full" alt="img"> </a>
                                <div class="list-social">
                                    <a href="#" tabindex="-1"><i class="az_tta-icon fa fa-facebook"></i></a>
                                    <a href="#" tabindex="-1"><i class="az_tta-icon fa fa-twitter"></i></a>
                                    <a href="#" tabindex="-1"><i class="az_tta-icon fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="content-team">
                                <h3 class="name">
                                    <a href="#" target="_self" tabindex="-1">
                                        Perry Conner </a>
                                </h3>
                                <p class="positions">Partner</p>
                            </div>
                        </div>
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
                        <img class="img-responsive" src="{{asset('images/poto 1.1.jpg')}}" alt="About">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">1                                                <i
                                                    class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0                                                <i
                                                    class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a href="#" class="item">
                        <img class="img-responsive" src="{{asset('images/poto 1.2.jpg')}}" alt="About">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">1                                                <i
                                                    class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0                                                <i
                                                    class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a href="#" class="item">
                        <img class="img-responsive" src="{{asset('images/poto 1.3.jpg')}}" alt="About">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">1                                                <i
                                                    class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0                                                <i
                                                    class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a href="#" class="item">
                        <img class="img-responsive" src="{{asset('images/poto 1.4.jpg')}}" alt="About">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">1                                                <i
                                                    class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0                                                <i
                                                    class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a href="#" class="item">
                        <img class="img-responsive" src="{{asset('images/poto 1.5.jpg')}}" alt="About">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">1                                                <i
                                                    class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0                                                <i
                                                    class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a href="#" class="item">
                        <img class="img-responsive" src="{{asset('images/poto 1.6.jpg')}}" alt="About">
                        <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">1                                                <i
                                                    class="flaticon-chat"></i>
                                            </span>
                                            <span class="social-info">0                                                <i
                                                    class="flaticon-heart-shape-outline"></i>
                                            </span>
                                        </span>
                                    </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection