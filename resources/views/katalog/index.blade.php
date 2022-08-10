@extends('katalog.master')

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
                {{-- <div class="kodory-nav top-bar-menu right">
                    <ul class="wpml-menu">
                        <li class="menu-item kodory-dropdown block-language">
                            <a href="#" data-kodory="kodory-dropdown">
                                <img src="assets/images/en.png" alt="en" width="18" height="12">
                                English
                            </a>
                            <span class="toggle-submenu"></span>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#">
                                        <img src="assets/images/it.png" alt="it" width="18" height="12">
                                        Italiano
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <div class="wcml-dropdown product wcml_currency_switcher">
                                <ul>
                                    <li class="wcml-cs-active-currency">
                                        <a class="wcml-cs-item-toggle">USD</a>
                                        <ul class="wcml-cs-submenu">
                                            <li>
                                                <a>EUR</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div> --}}
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
                        <a href="{{route('layout.master')}}"><img alt="img" src="{{asset('images/logoo.png')}}" width="100px" class="logo"></a>
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
                                <ul class="sub-menu">
                                    {{-- <li
                                        class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--dashboard is-active">
                                        <a href="#">Dashboard</a>
                                    </li> --}}
                                    <li
                                        class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">
                                        <a href="#">Orders</a>
                                    </li>
                                    {{-- <li
                                        class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--downloads">
                                        <a href="#">Downloads</a>
                                    </li> --}}
                                    <li
                                        class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-address">
                                        <a href="#">Addresses</a>
                                    </li>
                                    <li
                                        class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-account">
                                        <a href="#">Account details</a>
                                    </li>
                                    <li
                                        class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--customer-logout">
                                        <a href="#">Logout</a>
                                    </li>
                                </ul>
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
                                            {{-- <li class="kodory-mini-cart-item mini_cart_item">
                                                <a href="#" class="remove remove_from_cart_button">×</a>
                                                <a href="#">
                                                    <img src="assets/images/apro134-1-600x778.jpg"
                                                        class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                        alt="img" width="600" height="778">T-shirt with
                                                    skirt –
                                                    Pink&nbsp;
                                                </a>
                                                <span class="quantity">1 × <span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>150.00</span></span>
                                            </li>
                                            <li class="kodory-mini-cart-item mini_cart_item">
                                                <a href="#" class="remove remove_from_cart_button">×</a>
                                                <a href="#">
                                                    <img src="assets/images/apro1113-600x778.jpg"
                                                        class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                        alt="img" width="600" height="778">Ethereal
                                                    Toys&nbsp;
                                                </a>
                                                <span class="quantity">1 × <span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>129.00</span></span>
                                            </li>
                                            <li class="kodory-mini-cart-item mini_cart_item">
                                                <a href="#" class="remove remove_from_cart_button">×</a>
                                                <a href="#">
                                                    <img src="assets/images/apro201-1-600x778.jpg"
                                                        class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                        alt="img" width="600" height="778">Red Car&nbsp;
                                                </a>
                                                <span class="quantity">1 × <span
                                                        class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol">$</span>139.00</span></span>
                                            </li> --}}
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
                        {{-- <div data-items="8"
                            class="vertical-wrapper block-nav-category has-vertical-menu show-button-all">
                            <div class="block-title">
                                <span class="before">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="text-title">All Categories</span>
                            </div>
                            <div class="block-content verticalmenu-content">
                                <ul id="menu-vertical-menu" class="azeroth-nav vertical-menu default">
                                    <li id="menu-item-886"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-886">
                                        <a class="azeroth-menu-item-title" title="Toys" href="#"> Toys</a>
                                    </li>
                                    <li id="menu-item-895"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-895">
                                        <a class="azeroth-menu-item-title" title="Teddy Bear" href="#"> Teddy
                                            Bear</a>
                                    </li>
                                    <li id="menu-item-888"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-888">
                                        <a class="azeroth-menu-item-title" title="New Arrivals" href="#"> New
                                            Arrivals</a></li>
                                    <li id="menu-item-889"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-889">
                                        <a class="azeroth-menu-item-title" title="Clothing" href="#">
                                            Clothing</a></li>
                                    <li id="menu-item-890"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-890">
                                        <a class="azeroth-menu-item-title" title="Backpack" href="#">
                                            Backpack</a>
                                    </li>
                                    <li id="menu-item-891"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-891">
                                        <a class="azeroth-menu-item-title" title="Accessories" href="#">
                                            Accessories</a></li>
                                    <li id="menu-item-892"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-892">
                                        <a class="azeroth-menu-item-title" title="Essentials" href="#">
                                            Essentials</a>
                                    </li>
                                    <li id="menu-item-893"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-893">
                                        <a class="azeroth-menu-item-title" title="Featured" href="#">
                                            Featured</a></li>
                                    <li id="menu-item-894"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-894 link-other">
                                        <a class="azeroth-menu-item-title" title="Best Seller" href="#">
                                            Seller</a>
                                    </li>
                                </ul>
                                <div class="view-all-category">
                                    <a href="#" data-closetext="Close" data-alltext="All Categories"
                                        class="btn-view-all open-cate">All Categories</a>
                                </div>
                            </div>
                        </div><!-- block category --> --}}
                        {{-- <div class="box-header-nav menu-nocenter">
                            <ul id="menu-primary-menu"
                                class="clone-main-menu kodory-clone-mobile-menu kodory-nav main-menu">
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kodory-menu-item-title" title="" href="#">Home</a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-home">
                                        <div class="demo-item">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div
                                                        class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="index.html" target="_self"
                                                                class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg">
                                                                <img src="assets/images/demo001.jpg"
                                                                    class="az_single_image-img attachment-full"
                                                                    alt="img">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <h5 class="az_custom_heading">
                                                        <a href="{{('index.html')}}">Home</a>
                                                    </h5>
                                                </div> --}}
                                                {{-- <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div
                                                        class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="home-02.html" target="_self"
                                                                class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg ">
                                                                <img src="assets/images/demo002.jpg"
                                                                    class="az_single_image-img attachment-full"
                                                                    alt="img"></a>
                                                        </figure>
                                                    </div>
                                                    <h5 class="az_custom_heading">
                                                        <a href="home-02.html">Home 02</a>
                                                    </h5>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div
                                                        class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="home-03.html" target="_self"
                                                                class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg">
                                                                <img src="assets/images/demo003.jpg"
                                                                    class="az_single_image-img attachment-full"
                                                                    alt="img">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <h5 class="az_custom_heading">
                                                        <a href="home-03.html">Home 03</a>
                                                    </h5>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div
                                                        class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="home-04.html" target="_self"
                                                                class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg ">
                                                                <img src="assets/images/demo004.jpg"
                                                                    class="az_single_image-img attachment-full"
                                                                    alt="img">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <h5 class="az_custom_heading">
                                                        <a href="home-04.html">Home 04</a>
                                                    </h5>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div
                                                        class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="home-05.html" target="_self"
                                                                class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg">
                                                                <img src="assets/images/demo005.jpg"
                                                                    class="az_single_image-img attachment-full"
                                                                    alt="img">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <h5 class="az_custom_heading">
                                                        <a href="home-05.html">Home 05</a>
                                                    </h5>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div
                                                        class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="home-06.html" target="_self"
                                                                class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg ">
                                                                <img src="assets/images/demo006.jpg"
                                                                    class="az_single_image-img attachment-full"
                                                                    alt="img">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <h5 class="az_custom_heading">
                                                        <a href="home-06.html">Home 06</a>
                                                    </h5>
                                                </div> --}}
                                            {{-- </div>
                                        </div>
                                    </div>
                                </li>
                                {{-- <li id="menu-item-228"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kodory-menu-item-title" title="Shop" href="shop.html">Shop</a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-shop">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Shop Layouts </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="shop.html" target="_self">Shop Grid </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-list.html" target="_self">
                                                                    <span class="image">
                                                                        <img src="assets/images/label-new.png"
                                                                            class="attachment-full size-full"
                                                                            alt="img">
                                                                    </span>
                                                                    Shop List
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop.html" target="_self">No Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-leftsidebar.html" target="_self">Left
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-rightsidebar.html" target="_self">Right
                                                                    Sidebar </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Product Layouts </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-product.html" target="_self">Vertical
                                                                    Thumbnails </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-policy.html" target="_self">
                                                                    <span class="image">
                                                                        <img src="assets/images/label-new.png"
                                                                            class="attachment-full size-full"
                                                                            alt="img">
                                                                    </span>
                                                                    Extra Sidebar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-rightsidebar.html"
                                                                    target="_self">
                                                                    Right Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-leftsidebar.html"
                                                                    target="_self">
                                                                    Left Sidebar </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Product Extends </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-product-bundle.html" target="_self">
                                                                    <span class="image">
                                                                        <img src="assets/images/label-new.png"
                                                                            class="attachment-full size-full"
                                                                            alt="img">
                                                                    </span>
                                                                    Product Bundle
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-360deg.html" target="_self">
                                                                    <span class="image">
                                                                        <img src="assets/images/label-hot.png"
                                                                            class="attachment-full size-full"
                                                                            alt="img">
                                                                    </span>
                                                                    Product 360 Deg </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-video.html" target="_self">
                                                                    Video </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Other Pages </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="cart.html">Cart </a>
                                                            </li>
                                                            <li>
                                                                <a href="wishlist.html" target="_self">Wishlist </a>
                                                            </li>
                                                            <li>
                                                                <a href="checkout.html" target="_self">Checkout </a>
                                                            </li>
                                                            <li>
                                                                <a href="order-tracking.html" target="_self">Order
                                                                    Tracking </a>
                                                            </li>
                                                            <li>
                                                                <a href="my-account.html" target="_self">My Account
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="compare.html" target="_self">Compare</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Product Types </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-product-simple.html" target="_self">
                                                                    Simple </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product.html" target="_self">
                                                                    <span class="image"><img
                                                                            src="assets/images/label-hot.png"
                                                                            class="attachment-full size-full"
                                                                            alt="img"></span>
                                                                    Variable </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-external.html" target="_self">
                                                                    External / Affiliate </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-group.html" target="_self">
                                                                    Grouped </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-outofstock.html"
                                                                    target="_self">
                                                                    Out Of Stock </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-onsale.html" target="_self">
                                                                    On Sale </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Other Account Page</h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="dashboard.html" target="_self">
                                                                    Dashboard
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="orders.html" target="_self">
                                                                    Orders</a>
                                                            </li>
                                                            <li>
                                                                <a href="downloads.html" target="_self">
                                                                    Downloads </a>
                                                            </li>
                                                            <li>
                                                                <a href="edit-address.html" target="_self">
                                                                    Addresses</a>
                                                            </li>
                                                            <li>
                                                                <a href="edit-account.html" target="_self">
                                                                    Account details </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                {{-- <li id="menu-item-229"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kodory-menu-item-title" title="Elements" href="#">Elements</a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-elements">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Element 1 </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="banner.html" target="_self">Banner </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-element.html" target="_self">Blog
                                                                    Element </a>
                                                            </li>
                                                            <li>
                                                                <a href="categories-element.html" target="_self">
                                                                    Categories Element </a>
                                                            </li>
                                                            <li>
                                                                <a href="product-element.html" target="_self">
                                                                    Product Element </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Element 2 </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="client.html" target="_self">
                                                                    Client </a>
                                                            </li>
                                                            <li>
                                                                <a href="product-layout.html" target="_self">
                                                                    Product Layout </a>
                                                            </li>
                                                            <li>
                                                                <a href="google-map.html" target="_self">
                                                                    Google map </a>
                                                            </li>
                                                            <li>
                                                                <a href="iconbox.html" target="_self">
                                                                    Icon Box </a>
                                                            </li>
                                                            <li>
                                                                <a href="team.html" target="_self">
                                                                    Team </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Element 3 </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="instagram-feed.html" target="_self">
                                                                    Instagram Feed </a>
                                                            </li>
                                                            <li>
                                                                <a href="newsletter.html" target="_self">
                                                                    Newsletter </a>
                                                            </li>
                                                            <li>
                                                                <a href="testimonials.html" target="_self">
                                                                    Testimonials </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                {{-- <li id="menu-item-996"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kodory-menu-item-title" title="Blog" href="blog.html">Blog</a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-blog">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Blog Layout </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="blog.html" target="_self">No Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-leftsidebar.html" target="_self">Left
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-rightsidebar.html" target="_self">Right
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog.html" target="_self">Blog Standard </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html" target="_self">Blog Grid </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Post Layout </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-post.html" target="_self">No
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-leftsidebar.html"
                                                                    target="_self">Left
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-rightsidebar.html"
                                                                    target="_self">Right
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-instagram.html" target="_self">
                                                                    <span class="image">
                                                                        <img src="assets/images/label-hot.png"
                                                                            class="attachment-full size-full"
                                                                            alt="img">
                                                                    </span>
                                                                    Instagram In Post
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-product.html" target="_self">
                                                                    <span class="image">
                                                                        <img src="assets/images/label-new.png"
                                                                            class="attachment-full size-full"
                                                                            alt="img">
                                                                    </span>
                                                                    Product In Post
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="kodory-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Post Format </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-post.html" target="_self">Standard
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-gallery.html"
                                                                    target="_self">Gallery </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-video.html" target="_self">
                                                                    <span class="image">
                                                                        <img src="assets/images/label-hot.png"
                                                                            class="attachment-full size-full"
                                                                            alt="img">
                                                                    </span>
                                                                    Video
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                {{-- <li id="menu-item-237"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                    <a class="kodory-menu-item-title" title="Pages" href="#">Pages</a>
                                    <span class="toggle-submenu"></span>
                                    <ul role="menu" class="submenu">
                                        <li id="menu-item-987"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                                            <a class="kodory-menu-item-title" title="About"
                                                href="about.html">About</a>
                                        </li>
                                        <li id="menu-item-988"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-988">
                                            <a class="kodory-menu-item-title" title="Contact"
                                                href="contact.html">Contact</a>
                                        </li>
                                        <li id="menu-item-990"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-990">
                                            <a class="kodory-menu-item-title" title="Page 404" href="404.html">Page
                                                404</a>
                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                        {{-- </div> --}}
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
    {{-- <div class="header-mobile">
        <div class="header-mobile-left">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="header-search kodory-dropdown">
                <div class="header-search-inner" data-kodory="kodory-dropdown">
                    <a href="#" class="link-dropdown block-link">
                        <span class="flaticon-magnifying-glass-1"></span>
                    </a>
                </div>
                <div class="block-search">
                    <form role="search" method="get"
                        class="form-search block-search-form kodory-live-search-form">
                        <div class="form-content search-box results-search">
                            <div class="inner">
                                <input autocomplete="off" class="searchfield txt-livesearch input" name="s"
                                    value="" placeholder="Search here..." type="text">
                            </div>
                        </div>
                        <input name="post_type" value="product" type="hidden">
                        <input name="taxonomy" value="product_cat" type="hidden">
                        <div class="category">
                            <select title="product_cat" name="product_cat" id="1770352541"
                                class="category-search-option" tabindex="-1" style="display: none;">
                                <option value="0">All Categories</option>
                                <option class="level-0" value="Toy">Toys</option>
                                <option class="level-0" value="Teddy Bear">Teddy Bear</option>
                                <option class="level-0" value="Clothing">Clothing</option>
                                <option class="level-0" value="Backpack">Backpack</option>
                                <option class="level-0" value="new-arrivals">New arrivals</option>
                                <option class="level-0" value="Footwear">Footwear</option>
                                <option class="level-0" value="T-shirt">T-shirt</option>
                                <option class="level-0" value="Hoodie">Hoodie</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-submit">
                            <span class="flaticon-magnifying-glass-1"></span>
                        </button>
                    </form><!-- block search -->
                </div>
            </div>
            <ul class="wpml-menu">
                <li class="menu-item kodory-dropdown block-language">
                    <a href="#" data-kodory="kodory-dropdown">
                        <img src="assets/images/en.png" alt="en" width="18" height="12">
                        English
                    </a>
                    <span class="toggle-submenu"></span>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#">
                                <img src="assets/images/it.png" alt="it" width="18" height="12">
                                Italiano
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <div class="wcml-dropdown product wcml_currency_switcher">
                        <ul>
                            <li class="wcml-cs-active-currency">
                                <a class="wcml-cs-item-toggle">USD</a>
                                <ul class="wcml-cs-submenu">
                                    <li>
                                        <a>EUR</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="index.html"><img alt="Kodory" src="assets/images/logo.png" class="logo"></a>
            </div>
        </div>
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">
                    <div class="menu-item block-user block-dreaming kodory-dropdown">
                        <a class="block-link" href="my-account.html">
                            <span class="flaticon-profile"></span>
                        </a>
                        <ul class="sub-menu">
                            <li
                                class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--dashboard is-active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li
                                class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">
                                <a href="#">Orders</a>
                            </li>
                            <li
                                class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--downloads">
                                <a href="#">Downloads</a>
                            </li>
                            <li
                                class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-address">
                                <a href="#">Addresses</a>
                            </li>
                            <li
                                class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-account">
                                <a href="#">Account details</a>
                            </li>
                            <li
                                class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--customer-logout">
                                <a href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="block-minicart block-dreaming kodory-mini-cart kodory-dropdown">
                        <div class="shopcart-dropdown block-cart-link" data-kodory="kodory-dropdown">
                            <a class="block-link link-dropdown" href="cart.html">
                                <span class="flaticon-shopping-bag-1"></span>
                                <span class="count">3</span>
                            </a>
                        </div>
                        <div class="widget kodory widget_shopping_cart">
                            <div class="widget_shopping_cart_content">
                                <h3 class="minicart-title">Your Cart<span class="minicart-number-items">3</span></h3>
                                <ul class="kodory-mini-cart cart_list product_list_widget">
                                    <li class="kodory-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="assets/images/apro134-1-600x778.jpg"
                                                class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                alt="img" width="600" height="778">T-shirt with skirt –
                                            Pink&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>150.00</span></span>
                                    </li>
                                    <li class="kodory-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="assets/images/apro1113-600x778.jpg"
                                                class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                alt="img" width="600" height="778">Ethereal Toys&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>129.00</span></span>
                                    </li>
                                    <li class="kodory-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="assets/images/apro201-1-600x778.jpg"
                                                class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                alt="img" width="600" height="778">Red Car&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>139.00</span></span>
                                    </li>
                                </ul>
                                <p class="kodory-mini-cart__total total"><strong>Subtotal:</strong>
                                    <span class="kodory-Price-amount amount"><span
                                            class="kodory-Price-currencySymbol">$</span>418.00</span>
                                </p>
                                <p class="kodory-mini-cart__buttons buttons">
                                    <a href="cart.html" class="button kodory-forward">Viewcart</a>
                                    <a href="checkout.html" class="button checkout kodory-forward">Checkout</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</header>
<div class="banner-wrapper has_background">
    <img src="{{asset('images/home 1.jpg')}}" class="img-responsive attachment-1920x447 size-1920x447"
        alt="img">
    <div class="banner-wrapper-inner container">
        <h1 class="page-title">Shop</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="{{route('layout.master')}}"><span>Home</span></a></li>
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
                    {{-- <form class="kodory-ordering" method="get">
                        <select title="product_cat" name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>
                    <form class="per-page-form">
                        <label>
                            <select class="option-perpage">
                                <option value="12" selected="">
                                    Show 12
                                </option>
                                <option value="5">
                                    Show 05
                                </option>
                                <option value="10">
                                    Show 10
                                </option>
                                <option value="12">
                                    Show 12
                                </option>
                                <option value="15">
                                    Show 15
                                </option>
                                <option value="20">
                                    Show All
                                </option>
                            </select>
                        </label>
                    </form> --}}
                </div>
                <div class=" auto-clear kodory-products">
                    <ul class="row products columns-3">
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock featured shipping-taxable purchasable product-type-variable has-default-attributes"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="assets/images/apro161-1-600x778.jpg"
                                            alt="Kid Backpack" width="600" height="778">
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
                                                        <div class="data-val attribute-pa_color"
                                                            data-attributetype="box_style">
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                    style="background: #3155e2;" data-value="blue">
                                                                </span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                    style="background: #52b745;" data-value="green">
                                                                </span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                    style="background: #ffe59e;" data-value="pink">
                                                                </span>
                                                            </label>
                                                        </div>
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
                                        <a href="single-product.html">Kid Backpack</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
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
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="assets/images/apro1211-2-600x778.jpg"
                                            alt="Blue Shoes" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onsale"><span class="number">-14%</span></span>
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
                                        <a href="single-product.html">Blue Shoes</a>
                                    </h3>
                                    <div class="rating-wapper ">
                                        <div class="star-rating"><span style="width:100%">Rated <strong
                                                    class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review">(1)</span>
                                    </div>
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
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-30 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-specials product_tag-light product_tag-table product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="assets/images/apro101-1-600x778.jpg"
                                            alt="Penguin Hoodie" width="600" height="778">
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
                                        <a href="single-product.html">Penguin Hoodie</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
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
                                                <a href="wishlist.html" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <div class="kodory product compare-button">
                                            <a href="compare.html" class="compare button">Compare</a>
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
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="assets/images/apro171-1-600x778.jpg"
                                            alt="Cute Girl Shirt" width="600" height="778">
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
                                                        <div class="data-val attribute-pa_color"
                                                            data-attributetype="box_style">
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                    style="background: #3155e2;" data-value="blue">
                                                                </span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                    style="background: #52b745;" data-value="green">
                                                                </span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                    style="background: #ffe59e;" data-value="pink">
                                                                </span>
                                                            </label>
                                                        </div>
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
                                        <a href="single-product.html">Cute Girl Shirt</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
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
                        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-ts-6 style-01 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock  instock shipping-taxable purchasable product-type-simple"
                            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
                            <div class="product-inner tooltip-left">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="single-product.html">
                                        <img class="img-responsive" src="assets/images/apro41-1-600x778.jpg"
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
                                        <a href="single-product.html">Cute Shoes</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
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
                                        <img class="img-responsive" src="assets/images/apro181-2-600x778.jpg"
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
                                        <a href="single-product.html">Soccer Shoes</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
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
                                        <img class="img-responsive" src="assets/images/apro83-1-600x778.jpg"
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
                                                        <div class="data-val attribute-pa_color"
                                                            data-attributetype="box_style">
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                    style="background: #3155e2;" data-value="blue">
                                                                </span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                    style="background: #52b745;" data-value="green">
                                                                </span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="color">
                                                                <span class="change-value color"
                                                                    style="background: #ffe59e;" data-value="pink">
                                                                </span>
                                                            </label>
                                                        </div>
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
                                        <a href="single-product.html">Star Shoes</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
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
                                        <img class="img-responsive" src="assets/images/apro141-1-600x778.jpg"
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
                                        <a href="single-product.html">Red Car</a>
                                    </h3>
                                    <div class="rating-wapper ">
                                        <div class="star-rating"><span style="width:100%">Rated <strong
                                                    class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="review">(1)</span>
                                    </div>
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
                                        <img class="img-responsive" src="assets/images/apro61-1-600x778.jpg"
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
                                        <a href="single-product.html">Shark Shirt</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
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
                                        <img class="img-responsive" src="assets/images/apro71-1-600x778.jpg"
                                            alt="Kid Backpack" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="onsale"><span class="number">-18%</span></span>
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
                                        <a href="single-product.html">Kid Backpack</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
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
                                        <img class="img-responsive" src="assets/images/apro191-1-600x778.jpg"
                                            alt="Baby Shirt" width="600" height="778">
                                    </a>
                                    <div class="flash">
                                        <span class="sold-out"><span>Sold out</span></span>
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
                                                class="button product_type_simple add_to_cart_button">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info equal-elem">
                                    <h3 class="product-name product_title">
                                        <a href="single-product.html">Baby Shirt</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
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
                                        <img class="img-responsive" src="assets/images/apro13-1-600x778.jpg"
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
                                        <a href="single-product.html">Hello Shirt</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
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
                    <nav class="kodory-pagination">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">Next</a>
                    </nav>
                    {{-- <p class="kodory-result-count">Showing 1–12 of 20 results</p> --}}
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
                                        Price: <span class="from">$100</span> — <span class="to">$800</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="kodory_kodory_layered_nav-4"
                        class="widget kodory_widget_layered_nav widget_layered_nav">
                        <h2 class="widgettitle">Filter By Katalog<span class="arrow"></span></h2>
                        {{-- <form class="color-group">
                            <label class="term-color">
                                <input type="checkbox" name="term-color">
                                <i style="color: #000000"></i>
                                <span class="term-name">Black</span>
                                <span class="count">(4)</span> </label>
                            <label class="term-color ">
                                <input type="checkbox" name="term-color">
                                <i style="color: #337fdd"></i>
                                <span class="term-name">Blue</span>
                                <span class="count">(3)</span> </label>
                            <label class="term-color ">
                                <input type="checkbox" name="term-color">
                                <i style="color: #ffe59e"></i>
                                <span class="term-name">Light</span>
                                <span class="count">(1)</span> </label>
                            <label class="term-color ">
                                <input type="checkbox" name="term-color">
                                <i style="color: #b6b8ba"></i>
                                <span class="term-name">Gray</span>
                                <span class="count">(3)</span> </label>
                            <label class="term-color ">
                                <input type="checkbox" name="term-color">
                                <i style="color: #52b745"></i>
                                <span class="term-name">Green</span>
                                <span class="count">(1)</span> </label>
                            <label class="term-color ">
                                <input type="checkbox" name="term-color">
                                <i style="color: #cc7b4a"></i>
                                <span class="term-name">Brown</span>
                                <span class="count">(5)</span> </label>
                            <label class="term-color ">
                                <input type="checkbox" name="term-color">
                                <i style="color: #dd333f"></i>
                                <span class="term-name">Red</span>
                                <span class="count">(2)</span> </label>
                            <label class="term-color">
                                <input type="checkbox" name="term-color">
                                <i style="color: #e8e120"></i>
                                <span class="term-name">Yellow</span>
                                <span class="count">(2)</span> </label>
                        </form> --}}
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
                        <h2 class="widgettitle">Filter By Size<span class="arrow"></span></h2>
                        <ul class="kodory-widget-layered-nav-list">
                            <li class="kodory-widget-layered-nav-list__item kodory-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>XS</span>
                                    <span class="count">(0)</span></label>
                            </li>
                            <li class="kodory-widget-layered-nav-list__item kodory-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>S</span>
                                    <span class="count">(0)</span></label>
                            </li>
                            <li class="kodory-widget-layered-nav-list__item kodory-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>M</span>
                                    <span class="count">(0)</span></label>
                            </li>
                            <li class="kodory-widget-layered-nav-list__item kodory-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>L</span>
                                    <span class="count">(0)</span></label>
                            </li>
                            <li class="kodory-widget-layered-nav-list__item kodory-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>XL</span>
                                    <span class="count">(0)</span></label>
                            </li>
                            <li class="kodory-widget-layered-nav-list__item kodory-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>XXL</span>
                                    <span class="count">(0)</span></label>
                            </li>
                        </ul>
                    </div>
                    {{-- <div id="kodory_product_categories-3" class="widget kodory widget_product_categories">
                        <h2 class="widgettitle">Product categories<span class="arrow"></span></h2>
                        <ul class="product-categories">
                            <li class="cat-item cat-item-22"><label><input type="checkbox"
                                        name="cate"><span>Toys</span>
                                    <span class="count">(11)</span></label></li>
                            <li class="cat-item cat-item-16"><label><input type="checkbox"
                                        name="cate"><span>Teddy Bear</span>
                                    <span class="count">(9)</span></label></li>
                            <li class="cat-item cat-item-24"><label><input type="checkbox"
                                        name="cate"><span>Clothing</span>
                                    <span class="count">(6)</span></label></li>
                            <li class="cat-item cat-item-27"><label><input type="checkbox"
                                        name="cate"><span>Backpack</span> <span class="count">(6)</span></label>
                            </li>
                            <li class="cat-item cat-item-19"><label><input type="checkbox"
                                        name="cate"><span>New arrivals</span>
                                    <span class="count">(7)</span></label></li>
                            <li class="cat-item cat-item-17"><label><input type="checkbox"
                                        name="cate"><span>Footwear</span>
                                    <span class="count">(6)</span></label></li>
                            <li class="cat-item cat-item-26"><label><input type="checkbox"
                                        name="cate"><span>T-shirt</span> <span class="count">(4)</span></label>
                            </li>
                            <li class="cat-item cat-item-18"><label><input type="checkbox"
                                        name="cate"><span>Hoodie</span>
                                    <span class="count">(6)</span></label></li>
                        </ul>
                    </div> --}}
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