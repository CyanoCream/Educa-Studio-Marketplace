@extends('pesanan.master')

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
                                    <a class="block-link link-dropdown" href="#">
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
    <img src="{{asset('images/home 1.jpg')}}"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner container">
        <h1 class="page-title">Cart</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="#"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Cart</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="kodory">
                        <div class="kodory-notices-wrapper"></div>
                        <form class="kodory-cart-form">
                            <table class="shop_table shop_table_responsive cart kodory-cart-form__contents">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="kodory-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#"
                                           class="remove" aria-label="Remove this item" data-product_id="27"
                                           data-product_sku="885B712">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="single-product.html"><img
                                                src="{{asset('images/prt 1.1.jpg')}}"
                                                class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="single-product.html"></a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span></span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text"
                                                       value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span></span></td>
                                </tr>
                                <tr class="kodory-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#"
                                           class="remove" aria-label="Remove this item" data-product_id="29"
                                           data-product_sku="003D754">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="single-product.html"><img
                                                src="{{asset('images/prt 1.2.jpg')}}"
                                                class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="single-product.html"></a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span></span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text"
                                                       value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span></span></td>
                                </tr>
                                <tr class="kodory-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#"
                                           class="remove" aria-label="Remove this item" data-product_id="20"
                                           data-product_sku="775E109">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="single-product.html"><img
                                                src="{{asset('images/prt 1.3.jpg')}}"
                                                class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="single-product.html"></a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span></span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text"
                                                       value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span></span></td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label> <input type="text"
                                                                                            name="coupon_code"
                                                                                            class="input-text"
                                                                                            id="coupon_code" value=""
                                                                                            placeholder="Coupon code">
                                            <button type="submit" class="button" name="apply_coupon"
                                                    value="Apply coupon">Apply coupon
                                            </button>
                                        </div>
                                        <button type="submit" class="button" name="update_cart" value="Update cart"
                                                disabled="">Update cart
                                        </button>
                                        <input type="hidden" id="kodory-cart-nonce" name="kodory-cart-nonce"
                                               value="f41b5bf554"><input type="hidden" name="_wp_http_referer"
                                                                         value="/kodory/cart/"></td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart totals</h2>
                                <table class="shop_table shop_table_responsive">
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td data-title="Subtotal"><span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>00.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total"><strong><span
                                                class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">$</span>00.00</span></strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="kodory-proceed-to-checkout">
                                    <a href="#"
                                       class="checkout-button button alt kodory-forward">
                                        Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 dreaming_crosssell-product">
                            <div class="block-title">
                                <h2 class="product-grid-title">
                                    Cross Sell Products
                                    <span></span>
                                </h2>
                            </div>
                            <div class="owl-slick owl-products equal-container better-height"
                                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}"
                                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                                <div class="product-item style-01 post-278 page type-page status-publish hentry">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="assets/images/apro51012-1-600x778.jpg"
                                                     alt="Dazzling Toys" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onsale"><span class="number">-21%</span></span>
                                                <span class="onnew"><span class="text">New</span></span></div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="wishlist.html" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="kodory product compare-button"><a href="compare.html"
                                                                                                   class="compare button">Compare</a>
                                                </div>
                                                <a href="single-product.html" class="button yith-wcqv-button">Quick View</a>
                                                <div class="add-to-cart">
                                                    <a href="#"
                                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                        to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="0">Dazzling Toys</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><del><span
                                                    class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>125.00</span></del> <ins><span
                                                    class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>99.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style-01 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock first instock sale shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="assets/images/apro71-1-600x778.jpg"
                                                     alt="Kid Backpack" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onsale"><span class="number">-18%</span></span>
                                                <span class="onnew"><span class="text">New</span></span></div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="wishlist.html" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="kodory product compare-button"><a href="compare.html"
                                                                                                   class="compare button">Compare</a>
                                                </div>
                                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                <div class="add-to-cart">
                                                    <a href="#"
                                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                        to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="0">Kid Backpack</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><del><span
                                                    class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>109.00</span></del> <ins><span
                                                    class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>89.00</span></ins></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style-01 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                    <div class="product-inner tooltip-left">
                                        <div class="product-thumb">
                                            <a class="thumb-link"
                                               href="single-product.html"
                                               tabindex="0">
                                                <img class="img-responsive"
                                                     src="assets/images/apro91-1-600x778.jpg"
                                                     alt="Elegant Diamond" width="600" height="778">
                                            </a>
                                            <div class="flash">
                                                <span class="onnew"><span class="text">New</span></span></div>
                                            <div class="group-button">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="wishlist.html" class="add_to_wishlist">
                                                            Add to Wishlist</a>
                                                    </div>
                                                </div>
                                                <div class="kodory product compare-button"><a href="compare.html"
                                                                                                   class="compare button">Compare</a>
                                                </div>
                                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                                <div class="add-to-cart">
                                                    <a href="#"
                                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add
                                                        to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info equal-elem">
                                            <h3 class="product-name product_title">
                                                <a href="single-product.html"
                                                   tabindex="0">Elegant Diamond</a>
                                            </h3>
                                            <div class="rating-wapper nostar">
                                                <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                                <span class="review">(0)</span></div>
                                            <span class="price"><span
                                                    class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>89.00</span> – <span
                                                    class="kodory-Price-amount amount"><span
                                                    class="kodory-Price-currencySymbol">$</span>139.00</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
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
