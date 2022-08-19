@extends('katalog.master')

@section('content')
<header id="header" class="header style-04">
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <ul id="menu-top-center-menu" class="kodory-nav top-bar-menu" style="text-align: center">
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
                        <a href="/api"><img alt="img" src="{{asset('images/logoo.png')}}" width="100px" class="logo"></a>
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
                                    <a class="block-link link-dropdown" href="cart.html">
                                        <span class="flaticon-shopping-bag-1"></span>
                                        <span class="count">0</span>
                                    </a>
                                </div>
                                <div class="widget kodory widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <h3 class="minicart-title">Your Cart<span
                                                class="minicart-number-items">0</span></h3>
                                        <ul class="kodory-mini-cart cart_list product_list_widget">
                                        </ul>
                                        <p class="kodory-mini-cart__total total"><strong>Subtotal:</strong>
                                            <span class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span></span>
                                        </p>
                                        <p class="kodory-mini-cart__buttons buttons">
                                            <a href="cart.html" class="button kodory-forward">Viewcart</a>
                                            <a href="checkout.html"
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
    <img src="{{asset('images/home 1.jpg')}}" class="img-responsive attachment-1920x447 size-1920x447"
        alt="img">
    <div class="banner-wrapper-inner container">
        <h1 class="page-title">Shop</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="/api"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Shop</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container shop-page left-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-xl-9 col-lg-8 col-md-8 col-sm-12 has-sidebar">
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
                <div class=" auto-clear kodory-products">
                    <ul class="row products columns-3">
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="{{asset('images/np1.jpeg')}}"
                                            alt="img" width="600" height="778">
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
                                            <a href="cart.html"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Kindergarten English Course Power</a>
                                    </h3>
                                    <span class="price"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>45.00</span> – <span
                                            class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>54.00</span></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
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
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="{{asset('images/np2.jpeg')}}"
                                            alt="img" width="600" height="778">
                                    </a>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick
                                        View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="3" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kodory product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#"
                                                class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#"> Private English Course Les Bahasa Inggris Privat</a>
                                    </h3>
                                    <span class="price"><del><span class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>138.00</span></del>
                                        <ins><span class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>119.00</span></ins></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kodory product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-30 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-specials product_tag-light product_tag-table product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="{{asset('images/np3.jpg')}}"
                                            alt="img" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick
                                        View</a>
                                    <div class="group-button">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kodory product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#"
                                                class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">Praxis Fun English Online Course</a>
                                    </h3>
                                    <span class="price"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>60.00</span></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kodory product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-23 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-lamp product_cat-sofas product_tag-hat first instock shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#">
                                        <img class="img-responsive" src="{{asset('images/np4.jpeg')}}"
                                            alt="img" width="600" height="778">
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
                                                            <option data-type="" data-pa_color=""
                                                                value="">Choose an
                                                                option
                                                            </option>
                                                            <option data-width="30" data-height="30"
                                                                data-type="color" data-pa_color="#ffe59e"
                                                                value="pink" class="attached enabled">Pink
                                                            </option>
                                                            <option data-width="30" data-height="30"
                                                                data-type="color" data-pa_color="#a825ea"
                                                                value="purple" class="attached enabled">Purple
                                                            </option>
                                                            <option data-width="30" data-height="30"
                                                                data-type="color" data-pa_color="#b6b8ba"
                                                                value="red" class="attached enabled">Red
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
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kodory product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="#"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="#">English for SchoolAge (Offline Kota Madiun)</a>
                                    </h3>
                                    <span class="price"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>105.00</span> – <span
                                            class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>110.00</span></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
                                            <li>CLean zip-front, and three piece hood</li>
                                            <li>Subtle branding and diagonal panel detail</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="group-button">
                                    <div class="group-button-inner">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kodory product compare-button">
                                            <a href="compare.html" class="compare button">Compare</a>
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="add-to-cart">
                                            <a href="cart.html"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock  instock shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="{{asset('images/np5.jpeg')}}"
                                            alt="Cute Shoes" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick
                                        View</a>
                                    <div class="group-button">
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
                                            <a href="cart.html"
                                                class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="single-product.html">Class English Preschool & TK</a>
                                    </h3>
                                    <span class="price"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>134.00</span></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
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
                                            <a href="cart.html"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="{{asset('images/np6.jpeg')}}"
                                            alt="Soccer Shoes" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick
                                        View</a>
                                    <div class="group-button">
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
                                            <a href="cart.html"
                                                class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="single-product.html">Trial Class Sakamoto Class</a>
                                    </h3>
                                    <span class="price"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>98.00</span></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
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
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-33 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-lamp product_tag-light product_tag-table product_tag-hat first instock shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="{{asset('images/np7.jpeg')}}"
                                            alt="Glasses" width="600" height="778">
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
                                                            <option data-type="" data-pa_color=""
                                                                value="">Choose an
                                                                option
                                                            </option>
                                                            <option data-width="30" data-height="30"
                                                                data-type="color" data-pa_color="#000000"
                                                                value="black" class="attached enabled">Black
                                                            </option>
                                                            <option data-width="30" data-height="30"
                                                                data-type="color" data-pa_color="#b6b8ba"
                                                                value="red" class="attached enabled">Red
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
                                            <a href="cart.html"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="single-product.html">Eye Level Calistung</a>
                                    </h3>
                                    <span class="price"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>56.00</span> – <span
                                            class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>60.00</span></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
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
                                            <a href="cart.html"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-26 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-hat  instock featured shipping-taxable product-type-external"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="{{asset('images/np8.jpeg')}}"
                                            alt="Red Car" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick
                                        View</a>
                                    <div class="group-button">
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
                                            <a href="cart.html"
                                                class="button product_type_external add_to_cart_button">Buy it
                                                on Amazon</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="single-product.html">Matematika Online</a>
                                    </h3>
                                    <span class="price"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>207.00</span></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
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
                                            <a href="cart.html"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock sale featured shipping-taxable product-type-grouped"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="{{asset('images/mp1.jpg')}}"
                                            alt="Shark Shirt" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick
                                        View</a>
                                    <div class="group-button">
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
                                            <a href="cart.html"
                                                class="button product_type_grouped add_to_cart_button">View
                                                products</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="single-product.html">FREE 1 Month Trial - English - P3</a>
                                    </h3>
                                    <span class="price"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>79.00</span> – <span
                                            class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>139.00</span></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
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
                                            <a href="cart.html"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="{{asset('images/mp4.jpeg')}}"
                                            alt="Kid Backpack" width="600" height="778">
                                    </a>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick
                                        View</a>
                                    <div class="group-button">
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
                                            <a href="cart.html"
                                                class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="single-product.html">Math Lessons for Elementary School</a>
                                    </h3>
                                    <span class="price"><del><span class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>109.00</span></del>
                                        <ins><span class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>89.00</span></ins></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
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
                                            <a href="cart.html"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-21 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-lamp product_tag-light product_tag-sock  outofstock featured shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="{{asset('images/mp2.jpeg')}}"
                                            alt="Baby Shirt" width="600" height="778">
                                    </a>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick
                                        View</a>
                                    <div class="group-button">
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
                                            <a href="cart.html"
                                                class="button product_type_simple add_to_cart_button">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="single-product.html">Superstar Package for 6 Months</a>
                                    </h3>
                                    <span class="price"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>35.00</span></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
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
                                            <a href="cart.html"
                                                class="button product_type_variable add_to_cart_button">Select
                                                options</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock last instock shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="{{asset('images/mp3.jpg')}}"
                                            alt="Hello Shirt" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="24">Quick
                                        View</a>
                                    <div class="group-button">
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
                                            <a href="cart.html"
                                                class="button product_type_simple add_to_cart_button">Add to
                                                cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="single-product.html">Trial Coding Program for Children</a>
                                    </h3>
                                    <span class="price"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>109.00</span></span>
                                    <div class="kodory-product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                            turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                            tempor sit amet, ante.</p>
                                        <ul>
                                            <li>Water-resistant fabric with soft lycra detailing inside</li>
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
                    <div id="kodory_product_search-2" class="widget kodory widget_product_search">
                        <form class="kodory-product-search">
                            <input id="kodory-product-search-field-0" class="search-field"
                                placeholder="Search products…" value="" name="s" type="search">
                            <button type="submit" value="Search">Search</button>
                        </form>
                    </div>
                    <div id="kodory_price_filter-2" class="widget kodory widget_price_filter">
                        <h2 class="widgettitle">Filter By Price<span class="arrow"></span></h2>
                        <form method="get" action="#">
                            <div class="price_slider_wrapper">
                                <div data-label-reasult="Range:" data-min="0" data-max="1000" data-unit="$"
                                    class="price_slider" data-value-min="100" data-value-max="800">
                                </div>
                                <div class="price_slider_amount">
                                    <button type="submit" class="button">Filter</button>
                                    <div class="price_label">
                                        Price: <span class="from">$1.00</span> — <span class="to">$100.00</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="kodory_kodory_layered_nav-4"
                        class="widget kodory_widget_layered_nav widget_layered_nav">
                        <h2 class="widgettitle">Filter By Katalog<span class="arrow"></span></h2>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link" href="#">Aktivitas</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Kursus</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Experience</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Activity Kit</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Gratis</a>
                            </li>
                          </ul>
                    </div>
                    <div id="kodory_layered_nav-6"
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
                    </div>
                </div><!-- .widget-area -->
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
                            <input class="email email-newsletter" name="email"
                                placeholder="Enter your email ..." type="email">
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