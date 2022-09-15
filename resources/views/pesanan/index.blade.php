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
            <div class="col-md-12">
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
                                    
                                    @if (count($orders) == 0)
                                        <div class="alert alert-warning">Cart is empty</div>
                                        
                                   @else
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
                                                class="kodory-Price-currencySymbol">Rp.</span>{{ $order->total_harga}}.000</span></td>
                                </tr>
                                @endforeach
                                @endif
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
                                
                                </tbody>
                            </table>
                            
                        </form>
                        {{-- @include('pesanan.checkout') --}}
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart totals</h2>
                                <table class="shop_table shop_table_responsive">
                                    <tbody>
                                        <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total"><strong><span
                                                class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">Rp.</span>{{$sumorders}}.000 </span></strong>
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
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
