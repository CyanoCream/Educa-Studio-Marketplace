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
                {{-- <div class="kodory-nav top-bar-menu right">
                    <ul class="wpml-menu">
                        <li class="menu-item kodory-dropdown block-language">
                            <a href="#" data-kodory="kodory-dropdown">
                                <img src="assets/images/en.png"
                                     alt="en" width="18" height="12">
                                English
                            </a>
                            <span class="toggle-submenu"></span>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#">
                                        <img src="assets/images/it.png"
                                             alt="it" width="18" height="12">
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
                                    {{-- <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--dashboard is-active">
                                        <a href="#">Dashboard</a>
                                    </li> --}}
                                    <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">
                                        <a href="#">Orders</a>
                                    </li>
                                    {{-- <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--downloads">
                                        <a href="#">Downloads</a>
                                    </li> --}}
                                    <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-address">
                                        <a href="#">Addresses</a>
                                    </li>
                                    <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-account">
                                        <a href="#">Account details</a>
                                    </li>
                                    <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--customer-logout">
                                        <a href="#">Logout</a>
                                    </li>
                                </ul>
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
                                            {{-- <li class="kodory-mini-cart-item mini_cart_item">
                                                <a href="#" class="remove remove_from_cart_button">×</a>
                                                <a href="#">
                                                    <img src="assets/images/apro134-1-600x778.jpg"
                                                         class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                         alt="img" width="600" height="778">T-shirt with skirt –
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
                                                         alt="img" width="600" height="778">Ethereal Toys&nbsp;
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
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-886"><a
                                            class="azeroth-menu-item-title" title="Toys" href="#"> Toys</a></li>
                                    <li id="menu-item-895"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-895"><a
                                            class="azeroth-menu-item-title" title="Teddy Bear" href="#"> Teddy
                                        Bear</a>
                                    </li>
                                    <li id="menu-item-888"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-888"><a
                                            class="azeroth-menu-item-title" title="New Arrivals" href="#"> New
                                        Arrivals</a></li>
                                    <li id="menu-item-889"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-889"><a
                                            class="azeroth-menu-item-title" title="Clothing" href="#"> Clothing</a></li>
                                    <li id="menu-item-890"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-890"><a
                                            class="azeroth-menu-item-title" title="Backpack" href="#"> Backpack</a>
                                    </li>
                                    <li id="menu-item-891"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-891"><a
                                            class="azeroth-menu-item-title" title="Accessories" href="#">
                                        Accessories</a></li>
                                    <li id="menu-item-892"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-892"><a
                                            class="azeroth-menu-item-title" title="Essentials" href="#"> Essentials</a>
                                    </li>
                                    <li id="menu-item-893"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-893"><a
                                            class="azeroth-menu-item-title" title="Featured" href="#"> Featured</a></li>
                                    <li id="menu-item-894"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-894 link-other">
                                        <a class="azeroth-menu-item-title" title="Best Seller" href="#"></span> Seller</a></li>
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
                                                    <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
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
                                                        <a href="index.html">Home 01</a>
                                                    </h5>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
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
                                                    <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
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
                                                    <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
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
                                                        <a href="home-04.html">Home 04</a></h5>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
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
                                                    <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="menu-item-228"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kodory-menu-item-title" title="Shop"
                                       href="shop.html">Shop</a>
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
                                                                <a href="single-product-policy.html"
                                                                   target="_self">
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
                                                                <a href="single-product-bundle.html"
                                                                   target="_self">
                                                                            <span class="image">
                                                                                <img src="assets/images/label-new.png"
                                                                                     class="attachment-full size-full"
                                                                                     alt="img">
                                                                            </span>
                                                                    Product Bundle
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-360deg.html"
                                                                   target="_self">
                                                                    <span class="image">
                                                                        <img src="assets/images/label-hot.png"
                                                                             class="attachment-full size-full"
                                                                             alt="img">
                                                                    </span>
                                                                    Product 360 Deg </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-video.html"
                                                                   target="_self">
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
                                                                <a href="my-account.html" target="_self">My Account </a>
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
                                                                <a href="single-product-simple.html"
                                                                   target="_self">
                                                                    Simple </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product.html"
                                                                   target="_self">
                                                                            <span class="image"><img
                                                                                    src="assets/images/label-hot.png"
                                                                                    class="attachment-full size-full"
                                                                                    alt="img"></span>
                                                                    Variable </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-external.html"
                                                                   target="_self">
                                                                    External / Affiliate </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-group.html"
                                                                   target="_self">
                                                                    Grouped </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-outofstock.html"
                                                                   target="_self">
                                                                    Out Of Stock </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-onsale.html"
                                                                   target="_self">
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
                                </li>
                                <li id="menu-item-229"
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
                                                                <a href="banner.html"
                                                                   target="_self">Banner </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-element.html"
                                                                   target="_self">Blog Element </a>
                                                            </li>
                                                            <li>
                                                                <a href="categories-element.html"
                                                                   target="_self">
                                                                    Categories Element </a>
                                                            </li>
                                                            <li>
                                                                <a href="product-element.html"
                                                                   target="_self">
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
                                                                <a href="client.html"
                                                                   target="_self">
                                                                    Client </a>
                                                            </li>
                                                            <li>
                                                                <a href="product-layout.html"
                                                                   target="_self">
                                                                    Product Layout </a>
                                                            </li>
                                                            <li>
                                                                <a href="google-map.html"
                                                                   target="_self">
                                                                    Google map </a>
                                                            </li>
                                                            <li>
                                                                <a href="iconbox.html"
                                                                   target="_self">
                                                                    Icon Box </a>
                                                            </li>
                                                            <li>
                                                                <a href="team.html"
                                                                   target="_self">
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
                                                                <a href="instagram-feed.html"
                                                                   target="_self">
                                                                    Instagram Feed </a>
                                                            </li>
                                                            <li>
                                                                <a href="newsletter.html"
                                                                   target="_self">
                                                                    Newsletter </a>
                                                            </li>
                                                            <li>
                                                                <a href="testimonials.html"
                                                                   target="_self">
                                                                    Testimonials </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="menu-item-996"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kodory-menu-item-title" title="Blog"
                                       href="blog.html">Blog</a>
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
                                                                <a href="single-post-leftsidebar.html" target="_self">Left
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-rightsidebar.html" target="_self">Right
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
                                                                <a href="single-post-product.html"
                                                                   target="_self">
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
                                                                <a href="single-post.html" target="_self">Standard </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-gallery.html" target="_self">Gallery </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-video.html"
                                                                   target="_self">
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
                                </li>
                                <li id="menu-item-237"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                    <a class="kodory-menu-item-title" title="Pages" href="#">Pages</a>
                                    <span class="toggle-submenu"></span>
                                    <ul role="menu" class="submenu">
                                        <li id="menu-item-987"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                                            <a class="kodory-menu-item-title" title="About"
                                               href="about.html">About</a></li>
                                        <li id="menu-item-988"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-988">
                                            <a class="kodory-menu-item-title" title="Contact"
                                               href="contact.html">Contact</a></li>
                                        <li id="menu-item-990"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-990">
                                            <a class="kodory-menu-item-title" title="Page 404"
                                               href="404.html">Page 404</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> --}}
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
                                <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                       placeholder="Search here..." type="text">
                            </div>
                        </div>
                        <input name="post_type" value="product" type="hidden">
                        <input name="taxonomy" value="product_cat" type="hidden">
                        <div class="category">
                            <select title="product_cat" name="product_cat" id="1770352541"
                                    class="category-search-option" tabindex="-1"
                                    style="display: none;">
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
                        <img src="assets/images/en.png"
                             alt="en" width="18" height="12">
                        English
                    </a>
                    <span class="toggle-submenu"></span>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#">
                                <img src="assets/images/it.png"
                                     alt="it" width="18" height="12">
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
                <a href="index.html"><img alt="Kodory"
                                          src="assets/images/logo.png"
                                          class="logo"></a></div>
        </div>
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">
                    <div class="menu-item block-user block-dreaming kodory-dropdown">
                        <a class="block-link" href="my-account.html">
                            <span class="flaticon-profile"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--dashboard is-active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">
                                <a href="#">Orders</a>
                            </li>
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--downloads">
                                <a href="#">Downloads</a>
                            </li>
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-address">
                                <a href="#">Addresses</a>
                            </li>
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--edit-account">
                                <a href="#">Account details</a>
                            </li>
                            <li class="menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--customer-logout">
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
                                                 alt="img" width="600" height="778">T-shirt with skirt – Pink&nbsp;
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
                                                 alt="img" width="600" height="778">Ethereal Toys&nbsp;
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
    <img src="{{asset('images/home 1.jpg')}}"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner container">
        <h1 class="page-title">About</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="{{route('layout.master')}}"><span>Home</span></a></li>
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
                        <img src="{{asset('images/home.jpg')}}"
                             class="attachment-full size-full" alt="img">
                        {{-- <div class="product-video-button">
                            <a class="buttonvideo" href="#" data-videosite="vimeo" data-videoid="29420457" tabindex="0">
                                <div class="videobox_animation circle_1"></div>
                                <div class="videobox_animation circle_2"></div>
                                <div class="videobox_animation circle_3"></div>
                            </a>
                        </div> --}}
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
                    @kodorystore
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
                {{-- <div class="rows-space-0">
                    <a href="#" class="item">
                        <img class="img-responsive" src="{{asset('images/poto 1.7.jpg')}}" alt="About">
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
                        <img class="img-responsive" src="assets/images/insta8.jpg" alt="About">
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
                </div> --}}
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