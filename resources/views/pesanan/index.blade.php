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
                        <form action="" class="kodory-cart-form">
                            <table class="shop_table shop_table_responsive cart kodory-cart-form__contents">
                                <thead>
                                <tr>
                                    <th class="product-remove">Hapus</th>
                                    <th class="product-thumbnail">Views</th>
                                    <th class="product-name">Nama Produk</th>
                                    <th class="product-price">Harga</th>
                                    <th class="product-quantity">Jumlah</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                        
                                    @foreach ( $orders as $order )
                                <tr class="kodory-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="{{route('deleteOrder', ['id' => $order->id])}}" onclick="alert('Barang Berhasil dihapus');" data-url=""
                                           class="remove" aria-label="Remove this item" data-product_id="27"
                                           data-product_sku="885B712">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="single-product.html">
                                            @foreach ( $order->gambar['gambar'] as $gambar)
                                            <img
                                                src="/images/{{$gambar->gambar}}"
                                                class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                            @endforeach
                                    <td class="product-name" data-title="Product">
                                        <a href="single-product.html"></a>{{ $order->produk->nama_produk }}</td>
                                    <td class="product-price" data-title="Price">
                                        <span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">Rp.</span>{{ $order->produk->harga_produk }}</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                                                                           
                                                    <span class="kodory-Price-amount amount">{{ $order->jumlah_pesanan }}</span>
                                            
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">Rp.</span>{{ $order->produk->harga_produk  *  $order->jumlah_pesanan }} </span></td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                        </div>
                                        <button type="button" class="button" name="" value=""
                                        data-toggle="modal" data-target="#pulsa" >Checkout
                                        </button>
                                        <input type="hidden" id="kodory-cart-nonce" name="kodory-cart-nonce"
                                               value="f41b5bf554"><input type="hidden" name="_wp_http_referer"
                                                                         value="/kodory/cart/"></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                        </form>
                        @include('pesanan.checkout')
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart totals</h2>
                                <table class="shop_table shop_table_responsive">
                                    <tbody>
                                        @foreach ( $orders as $order )
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total"><strong><span
                                                class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">Rp.</span>{{ $order->produk->harga_produk  *  $order->jumlah_pesanan }} </span></strong>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="kodory-proceed-to-checkout">
                                    <a href="#"
                                       class="checkout-button button alt kodory-forward">
                                        Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12 col-sm-12 dreaming_crosssell-product">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
