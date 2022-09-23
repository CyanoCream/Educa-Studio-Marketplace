@extends('layouts.master2')

@section('content')
<header id="header" class="header style-04">
    <div class="header-middle" style="padding: 45px; color: #868686;">
        <div class="container">
            <div class="header-middle-inner">
                <div class="header-logo-menu">
                    <div class="block-menu-bar">
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
                        <div class="phone-header" style=" top : 50px;">
                            <div class="phone-inner">
                                <span class="phone-icon">
                                    <span class="pe-7s-call"></span>
                                </span>
                                <div class="phone-number">
                                    <p>Support & Order</p>
                                    <p><a href="wa.me/6285743736401" class="text-light">085743736401</a></p>
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
    <img src="{{asset('images/home 1.jpg')}}" class="img-responsive attachment-1920x447 size-1920x447"
        alt="img">
    <div class="banner-wrapper-inner container">
        <h1 class="page-title">Shop</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="#"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Shop</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container shop-page left-sidebar" style="padding-top:100px;">
    <div class="container">
        <div class="row">
            <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-12 has-sidebar">
                <div class="shop-control shop-before-control">
                    <div class="grid-view-mode">
                        <form>
                            <a href="#" data-toggle="tooltip" data-placement="top"
                                class="modes-mode mode-grid display-mode active">
                                <span class="button-inner">
                                    Shop Grid
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="#" data-toggle="tooltip" data-placement="top"
                                class="modes-mode mode-list display-mode ">
                                <span class="button-inner">
                                    Shop List
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                        </form>
                    </div>
                </div>
                <div id="app" class=" auto-clear kodory-products">
                    <ul  class="row products columns-3">
                        <li v-for="p in aktivitas" :key="p.id" class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" v-on:click="getData(p.id)">
                                        <img class="img-responsive" width="600" height="778" :src="'/images/'+ p.gambar[0].gambar" alt="">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <form class="variations_form cart">
                                        <table class="variations">
                                            <tbody>
                                                <tr>
                                                    <td class="value">
                                                        <select title="box_style" data-attributetype="box_style"
                                                            data-id="pa_color" class="attribute-select "
                                                            name="attribute_pa_color"
                                                            data-attribute_name="attribute_pa_color"
                                                            data-show_option_none="yes">
                                                            <option data-type="" data-pa_color="" value="">
                                                                Choose an
                                                                option
                                                            </option>
                                                            <option data-width="30" data-height="30"
                                                                data-type="color" data-pa_color="#3155e2"
                                                                value="blue" class="attached enabled">Blue
                                                            </option>
                                                            <option data-width="30" data-height="30"
                                                                data-type="color" data-pa_color="#52b745"
                                                                value="green" class="attached enabled">Green
                                                            </option>
                                                            <option data-width="30" data-height="30"
                                                                data-type="color" data-pa_color="#ffe59e"
                                                                value="pink" class="attached enabled">Pink
                                                            </option>
                                                        </select>
                                                        <a class="reset_variations" href="#"
                                                            style="visibility: hidden;">Clear</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick
                                        View</a>
                                    <div class="group-button">
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="cart.html"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#"  v-on:click="getData(p.id)">@{{ p.nama_produk }} </a>
                                    </h3>
                                    <span class="price"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">Rp.</span>@{{ p.harga_produk }}</span>
                                    <div class="kodory-product-details__short-description">
                                        <p>@{{ p.keterangan }}</p>
                                        <ul>
                                            <li>@{{ p.manfaat }}</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kodory product compare-button">
                                            <a href="compare.html" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="single-product.html"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shop-control shop-after-control">
                </div>
            </div>
            <div class="sidebar col-xl-3 col-lg-4 col-md-4 col-sm-12">
                <div id="widget-area" class="widget-area shop-sidebar">


                    <div id="kodory_kodory_layered_nav-4"
                    class="widget kodory_widget_layered_nav widget_layered_nav">
                    <h2 class="widgettitle">Filter By Katalog<span class="arrow"></span></h2>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route ('katalog.index')}}">Semua</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color: rgb(0, 140, 255);  href="{{route ('aktivitas')}}">Aktivitas</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route ('kursus')}}">Kursus</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route ('experience')}}">Experience</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route ('gratis')}}">Gratis</a>
                        </li>
                      </ul>
                </div>
                    {{-- <div id="kodory_layered_nav-6"
                        class="widget kodory widget_layered_nav kodory-widget-layered-nav">
                        <h2 class="widgettitle">Price<span class="arrow"></span></h2>
                        <ul class="kodory-widget-layered-nav-list">
                            <li class="kodory-widget-layered-nav-list__item kodory-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>$1.00 - $10.00</span>
                                </label>
                            </li>
                            <li class="kodory-widget-layered-nav-list__item kodory-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>$10.00 - $30.00</span>
                                </label>
                            </li>
                            <li class="kodory-widget-layered-nav-list__item kodory-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>$30.00 - $40.00</span>
                                </label>
                            </li>
                            <li class="kodory-widget-layered-nav-list__item kodory-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>$40.00 - $50.00</span>
                                </label>
                            </li>
                            <li class="kodory-widget-layered-nav-list__item kodory-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>$50.00 - $100.00</span>
                                </label>
                            </li>
                        </ul>
                    </div> --}}
                </div><!-- .widget-area -->
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
<script>

</script>
@endsection