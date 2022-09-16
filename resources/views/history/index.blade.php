@extends('akun.master')

@section('content')
<header id="header" class="header style-04">
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <ul id="menu-top-center-menu" class="kodory-nav top-bar-menu" style="text-align-last: center">
                    <li id="menu-item-864"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-864">
                        <a class="kodory-menu-item-title" title="" href="#"><span
                                class="icon pe-7s-map-marker"></span>Jl Kalisombo Salatiga</a>
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
        <h1 class="page-title">History</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="/"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>History</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12" style="box-shadow: none; display:block">
                <div class="page-main-content">
                    <div class="kodory">
                        <div class="kodory-notices-wrapper"></div>
                        <form class="kodory-cart-form">
                            <table class="shop_table shop_table_responsive cart kodory-cart-form__contents">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Images</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="kodory-cart-form__cart-item cart_item">
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="single-product.html">
                                        <img src="assets/images/apro134-1-600x778.jpg" class="attachment-kodory_thumbnail size-kodory_thumbnail" alt="img" width="600" height="778"></a>
                                    </td>
                                    <td class="product-name" data-title="Product">
                                        <a href="single-product.html">T-shirt with skirt – Pink</a>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="kodory-Price-amount amount">
                                        <span class="kodory-Price-currencySymbol">$</span>150.00</span>
                                    </td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="kodory-Price-amount amount">
                                        <span class="kodory-Price-currencySymbol">$</span>150.00</span>
                                    </td>
                                </tr>
                                <tr class="kodory-cart-form__cart-item cart_item">
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="single-product.html">
                                            <img src="assets/images/apro1113-600x778.jpg" class="attachment-kodory_thumbnail size-kodory_thumbnail" alt="img" width="600" height="778">
                                        </a>
                                    </td>
                                    <td class="product-name" data-title="Product">
                                        <a href="single-product.html">Short Sleeve Loose</a>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="kodory-Price-amount amount">
                                        <span class="kodory-Price-currencySymbol">$</span>129.00</span>
                                    </td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="kodory-Price-amount amount">
                                        <span class="kodory-Price-currencySymbol">$</span>129.00</span>
                                    </td>
                                </tr>
                                <tr class="kodory-cart-form__cart-item cart_item">
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="single-product.html">
                                            <img src="assets/images/apro201-1-600x778.jpg" class="attachment-kodory_thumbnail size-kodory_thumbnail" alt="img" width="600" height="778">
                                        </a>
                                    </td>
                                    <td class="product-name" data-title="Product">
                                        <a href="single-product.html">Red Car</a>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="kodory-Price-amount amount">
                                        <span class="kodory-Price-currencySymbol">$</span>139.00</span>
                                    </td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="kodory-Price-amount amount"></span>
                                        <span class="kodory-Price-currencySymbol">$</span>139.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label> 
                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                            <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon </button>
                                        </div>
                                            <input type="hidden" id="kodory-cart-nonce" name="kodory-cart-nonce" value="f41b5bf554">
                                            <input type="hidden" name="_wp_http_referer"value="/kodory/cart/">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </main>
@endsection