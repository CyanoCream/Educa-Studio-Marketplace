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
    <img src="{{asset('images/home 1.jpg')}}"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
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
    <div class="col-xl-3" style="margin-left:900px; padding-bottom:15px;">
        <div id="" class="">
            <div id="kodory_product_search-2" class="widget kodory widget_product_search">
                <form class="kodory-product-search" acton="{{route('history')}}" methode="get">
                  <input id="kodory-product-search-field-0" class="search-field"
                   placeholder="Search products…" value="" name="cari" type="search">
                <button type="submit" value="Search">Search</button>
                </form>

           </div>
         </div>
    </div>
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
                                    
                                    <th class="product-remove">date Checkout</th>
                                    <th class="product-thumbnail">Views</th>
                                    <th class="product-name">Nama Produk</th>
                                    <th class="product-price">Harga</th>
                                    <th class="product-quantity">Jumlah</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-subtotal">Status Order</th>
                                    <th class="product-subtotal">No Invoice</th>
                                    <th class="product-subtotal">
                                        <a href="{{route ('desc')}}"><i class="fa fa-chevron-up text-info" aria-hidden="true"></i></a><br>
                                        <a href="{{route ('asc')}}"><i class="fa fa-chevron-down text-info" aria-hidden="true"></i></a>

                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    @if (count($orders) == 0)
                                        <div class="alert alert-warning">Cart is empty</div>
                                        
                                   @else
                                    @foreach ( $orders as $order )
                                <tr class="kodory-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        {{$order->updated_at}}</td>
                                    <td class="product-thumbnail">
                                        <a href="produk-detail/{{ $order->id_produk}}">
                                            @foreach ( $order->gambar['gambar'] as $gambar)
                                            <img
                                                src="/images/{{$gambar->gambar}}"
                                                class="attachment-kodory_thumbnail size-kodory_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                            @endforeach
                                    <td class="product-name" data-title="Product">
                                        <a href="produk-detail/{{ $order->id_produk}}">{{ $order->produk->nama_produk }}</a></td>
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
                                                <td class="product-price" data-title="Price">
                                                    <span class="kodory-Price-amount amount"><span
                                                            class="kodory-Price-currencySymbol "></span> SUCCESS </span></td>
                                        <td style="border-right:none;" class="product-price" data-title="Price">
                                            <span class="kodory-Price-amount amount"><span
                                            class="kodory-Price-currencySymbol "></span>{{Auth::user()->id * $order->id_produk * $order->id }}/INVOICE/{{$order->id_produk}}/{{Auth::user()->id}}{{$order->id}}</span></td>
                                <td><a style=" display: inline-block;min-width: 80px;height: 50px;line-height: 52px;
                                                padding: 0 15px;text-align: center;font-size: 14px;border-radius: 30px; color:aliceblue;
                                                background-color: #71c0ef;position: relative;" href="/history/invoice/{{$order->id}}"><b>Print</b></a></td>
                                        </tr>
                                @endforeach
                                @endif
                                {{-- <tr>
                                    <td colspan="9" class="actions">
                                        <div class="coupon">
                                        </div>

                                            <button type="button" class="button" name="" value=""
                                            data-toggle="modal" data-target="#pulsa" >Checkout
                                            </button>
                                      
                                        <input type="hidden" id="kodory-cart-nonce" name="kodory-cart-nonce"
                                               value="f41b5bf554"><input type="hidden" name="_wp_http_referer"
                                                                         value="/kodory/cart/"></td>
                                </tr> --}}
                                
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
