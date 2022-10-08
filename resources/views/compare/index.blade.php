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
        <h1 class="page-title">Cart</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="/"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Cart</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<main class="site-main  main-container no-sidebar">
    <div class="container">
        @if (count($orders) == 0)
         <div class="alert alert-warning">Compare is empty</div>

            @else
           
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="dreaming-wccp-content-wrap">
                        
                        <div class="dreaming-wccp-left-part">
                            <div class="field-names-col dreaming-wccp-col">
                                <div class="dreaming-wccp-field field-image">Product</div>
                                <div class="dreaming-wccp-field field-price">Harga</div>
                                <div class="dreaming-wccp-field field-price">Kategori</div>
                                <div class="dreaming-wccp-field field-add-to-cart">Add to cart</div>
                                <div class="dreaming-wccp-field"></div>
                            </div>
                        </div>
                            
                        <div class="dreaming-wccp-right-part">
                            <div class="response-product product-list-owl owl-slick"
                                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}"
                                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
                                <div class="dreaming-item">
                                    <div class="dreaming-wccp-col">
                                        <div class="dreaming-wccp-field field-image product_3391">
                                            <div class="image-wrap">
                                                <img src="assets/images/apro1113-270x350.jpg" alt="img">
                                            </div>
                                            <h5 class="product-title">
                                                <a href="single-product.html">Red Car</a>
                                            </h5></div>
                                        <div class="dreaming-wccp-field field-price product_3391"><span
                                                class="dreaming-Price-amount amount"><span
                                                class="dreaming-Price-currencySymbol">£</span>321.00</span>
                                        </div>
                                        <div class="dreaming-wccp-field field-sku product_3391">098X813</div>
                                        <div class="dreaming-wccp-field field-add-to-cart product_3391">
                                            <a href="cart.html" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                        </div>
                                        <div class="dreaming-wccp-field field-remove product_3391">
                                            <a href="#" class="dreaming-wccp-remove-product">x</a>
                                        </div>
                                    </div>
                                </div>
                              
                                @foreach ( $orders as $order )
                                <div class="dreaming-item">
                                    <div class="dreaming-wccp-col">
                                        <div class="dreaming-wccp-field field-image product_3371">
                                            <div class="image-wrap">
                                                @foreach ( $order->gambar['gambar'] as $gambar)
                                                <img src="/images/{{$gambar->gambar}}" alt="img">
                                                @endforeach
                                            </div>
                                            <h5 class="product-title">
                                                <a href="single-product.html">{{$order->produk->nama_produk}}</a>
                                            </h5>
                                        </div>
                                        <div class="dreaming-wccp-field field-price product_3371">
                                            <span class="dreaming-Price-amount amount">
                                                <span class="dreaming-Price-currencySymbol">Rp.</span>{{$order->produk->harga_produk}}.000</span>
                                        </div>
                                        <div class="dreaming-wccp-field field-sku product_3371">{{$order->produk->kategori}}</div>
                                        <div class="dreaming-wccp-field field-add-to-cart product_3371">
                                            <a href="cart.html"
                                               class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                                Add to cart
                                            </a>
                                        </div>
                                        <div class="dreaming-wccp-field field-remove product_3371">
                                            <a href="{{route('deleteOrder', ['id' => $order->id])}}" class="dreaming-wccp-remove-product">x</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</main>
@endsection
