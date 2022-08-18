@extends('premium.master')

@section('content')
<header id="header" class="header style-04">
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <ul id="menu-top-center-menu" class="kodory-nav top-bar-menu" style="text-align-last: center">
                    <li id="menu-item-864" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-864">
                        <a class="kodory-menu-item-title" title="" href="#"><span
                                class="icon pe-7s-map-marker"></span>Store Direction</a></li>
                    <li id="menu-item-865"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-865"><a
                            class="kodory-menu-item-title" title="" href="mailto:chlid6630@gmail.com"><span
                                class="icon pe-7s-mail"></span>Info@child.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-middle">
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
                    <div class="header-logo">
                        <a href="#"><img alt="img" src="{{asset('images/logoo.png')}}" width="100px" class="logo"></a>
                    </div>
                </div>
                <div class="header-search-mid">
                    <div class="header-search">
                        <div class="block-search">
                            <form role="search" method="get"
                                class="form-search block-search-form kodory-live-search-form">
                                <div class="form-content search-box results-search">
                                    <div class="inner">
                                        <input autocomplete="off" class="searchfield txt-livesearch input"
                                            name="s" value="" placeholder="Search here..." type="text">
                                    </div>
                                </div>
                                <input name="post_type" value="product" type="hidden">
                                <input name="taxonomy" value="product_cat" type="hidden">
                                <div class="category">
                                    <select title="product_cat" name="product_cat" id="1771262470"
                                        class="category-search-option" tabindex="-1" style="display: none;">
                                        <option value="0">All Categories</option>
                                        <option class="level-0" value="aktivitas">Aktivitas</option>
                                        <option class="level-0" value="kursus">Kursus</option>
                                        <option class="level-0" value="experience">Experience</option>
                                        <option class="level-0" value="aktivity_kit">Aktivity Kit</option>
                                        <option class="level-0" value="gratis">Gratis</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn-submit">
                                    <span class="flaticon-magnifying-glass-1"></span>
                                </button>
                            </form><!-- block search -->
                        </div>
                    </div>
                </div>
                <div class="header-control">
                    <div class="header-control-inner">
                        <div class="meta-dreaming">
                            <div class="menu-item block-user block-dreaming kodory-dropdown">
                                <a class="block-link" href="#">
                                    <span class="flaticon-profile"></span>
                                </a>
                            </div>
                            <div class="block-minicart block-dreaming kodory-mini-cart kodory-dropdown">
                                <div class="shopcart-dropdown block-cart-link" data-kodory="kodory-dropdown">
                                    <a class="block-link link-dropdown" href="#cart.html">
                                        <span class="flaticon-shopping-bag-1"></span>
                                        <span class="count">0</span>
                                    </a>
                                </div>
                                <div class="widget kodory widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <h3 class="minicart-title">Your Cart<span
                                                class="minicart-number-items">3</span></h3>
                                        <ul class="kodory-mini-cart cart_list product_list_widget">
                                        </ul>
                                        <p class="kodory-mini-cart__total total"><strong>Subtotal:</strong>
                                            <span class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>00.00</span>
                                        </p>
                                        <p class="kodory-mini-cart__buttons buttons">
                                            <a href="#l" class="button kodory-forward">Viewcart</a>
                                            <a href="#"
                                               class="button checkout kodory-forward">Checkout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <img src="{{asset('images/home 1.jpg')}}"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner container">
        <h1 class="page-title">About</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="#"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>About</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="site-main  main-container no-sidebar">
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
<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="index.html">
					<span class="icon">
						<span class="fa fa-home"></span>
					</span>
                Home
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="wishlist.html">
					<span class="icon">
						<span class="flaticon-heart"></span>
					</span>
                Wishlist
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="cart.html">
					<span class="icon">
						<span class="flaticon-shopping-bag-1"></span>
						<span class="count-icon">
							0
						</span>
					</span>
                <span class="text">Cart</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">
            <a href="my-account.html">
					<span class="icon">
						<span class="flaticon-profile"></span>
					</span>
                Account
            </a>
        </div>
    </div>
</div>
<a href="#" class="backtotop active">
    <i class="fa fa-angle-double-up"></i>
</a>
@endsection