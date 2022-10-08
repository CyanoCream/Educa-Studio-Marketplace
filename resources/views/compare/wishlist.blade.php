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
<main class="site-main main-container no-sidebar">
    {{-- <div class="col-xl-3" style="margin-left:900px; padding-bottom:15px;">
        <div id="" class="">
            <div id="kodory_product_search-2" class="widget kodory widget_product_search">
                <form class="kodory-product-search">
                  <input id="kodory-product-search-field-0" class="search-field"
                   placeholder="Search products…" value="" name="s" type="search">
                <button type="submit" value="Search">Search</button>
                </form>
            </div>
         </div>
    </div> --}}
    <div class="container">
        <div class="col-xl-3" style="margin-left:900px; padding-bottom:15px;">
            <div id="" class="">
                <div id="kodory_product_search-2" class="widget kodory widget_product_search">
                    <form class="kodory-product-search" acton="" methode="get">
                      <input id="kodory-product-search-field-0" class="search-field"
                       placeholder="Search products…" value="{{request('cari')}}" name="cari" type="search">
                    <button type="submit" value="Search">Search</button>
                    </form>
    
               </div>
             </div>
        </div>
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
                                    <th class="product-quantity">Stok Status</th>
                                    <th class="product-subtotal">
                                        <a href="{{route ('desc.order')}}"><i class="fa fa-chevron-up text-info" aria-hidden="true"></i></a><br>
                                        <a href="{{route ('asc.order')}}"><i class="fa fa-chevron-down text-info" aria-hidden="true"></i></a>

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    @if (count($orders) == 0)
                                        <div class="alert alert-danger">Wishlist is empty</div>
                                        
                                   @else
                                    @foreach ( $orders as $order )
                                <tr class="kodory-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="{{route('deleteOrder', ['id' => $order->id])}}" onclick="save('this')" data-url=""
                                           class="remove" aria-label="Remove this item" data-product_id="27"
                                           data-product_sku="885B712">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="{{ $order->produk->nama_produk }}">
                                            @foreach ( $order->gambar['gambar'] as $gambar)
                                            <img
                                                src="/images/{{$gambar->gambar}}"
                                                class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                            @endforeach
                                    <td class="product-name" data-title="Product">
                                        <a href="{{ $order->produk->nama_produk }}">{{ $order->produk->nama_produk }}</a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="kodory-Price-amount amount"><span
                                                class="kodory-Price-currencySymbol">Rp.</span>{{ $order->produk->harga_produk }}</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="">
                                            <span class=""></span>
                                                    @if( $order->produk->stock != 0 )
                                                    <span class="kodory-Price-amount amount text-primary"><strong> In Stock </strong></span>
                                                    @elseif($order->produk->stock == 0)
                                                    <span class="kodory-Price-amount amount text-danger"><b> Out Stock </b></span>
                                                    @endif
                                             
                                        </div>
                                    </td>
                                    <td class="product-add-to-cart">
                                        <!-- Date added -->
                                        <!-- Add to cart button -->
                                        <a href="cart.html" role="button"
                                           data-quantity="1"
                                           class="ml-5 mr-1 button btn btn-submit product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart button alt"
                                           data-product_id="22" data-product_sku="389N100"
                                           aria-label="Add “Soccer Shoes” to your cart" rel="nofollow"> Add to Cart</a>
                                        <!-- Change wishlist -->
                                        <!-- Remove from wishlist -->
                                    </td>
                        
                                </tr>
                                @endforeach
                                @endif
                                
                                </tbody>
                            </table>
                            
                        </form>


                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
