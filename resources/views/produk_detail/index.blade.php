@extends('layouts.master2')

@section('content')
<header id="header" class="header style-04">

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
                </div>
            </div>
        </div>
</header>

<div class="banner-wrapper no_background">
    <div class="banner-wrapper-inner container">
        <nav class="kodory-breadcrumb"><a href="/">Home</a><i class="fa fa-angle-right"></i><a
                href="{{route('katalog.index')}}">Shop</a>
            <i class="fa fa-angle-right"></i>Produk Detail
        </nav>
    </div>
</div>
<div class="single-thumb-vertical main-container shop-page no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12" style="box-shadow: none;">
                <div class="kodory-notices-wrapper"></div>
                <div id="product-27"
                    class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="main-contain-summary">
                        <div class="contain-left has-gallery">
                            <div class="single-left">
                                <div
                                    class="kodory-product-gallery kodory-product-gallery--with-images kodory-product-gallery--columns-4 images">
                                    <a href="#" class="kodory-product-gallery__trigger">
                                        <img draggable="false" class="emoji" alt="🔍"
                                            src="https://s.w.org/images/core/emoji/11/svg/1f50d.svg"></a>
                                    <div class="flex-viewport">
                                        <figure class="kodory-product-gallery__wrapper">
                                            {{-- @foreach ($produk->gambar as $g) --}}
                                            <div class="kodory-product-gallery__image">
                                                <img alt="img" src="/images/{{$produk[0]->gambar}}">
                                            </div>
                                            {{-- @endforeach --}}
                                        </figure>
                                    </div>
                                    <ol class="flex-control-nav flex-control-thumbs">
                                        {{-- @foreach ($produk->gambar as $g) --}}

                                        <li><img src="/images/{{$produk[0]->gambar}}" alt="img">
                                        </li>
                                        {{-- @endforeach --}}
                                    </ol>
                                </div>
                            </div>
                            <div class="summary entry-summary">
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <h1 class="product_title entry-title">{{ $produk[0]->nama_produk }}</h1>
                                <p class="price"><span class="kodory-Price-amount amount"><span
                                            class="kodory-Price-currencySymbol">Rp.</span>{{ $produk[0]->harga_produk }}</span>
                                    <p class="stock in-stock">
                                        Stock Available: <span>{{ $produk[0]->stock }}</span>
                                    </p>
                                    <div class="kodory-product-details__short-description">
                                        <p>{{ $produk[0]->keterangan }}</p>
                                        <ul>
                                            <li>{{ $produk[0]->manfaat }}</li>
                                        </ul>
                                    </div>
                                    <form action="{{ route ('checkout', [$id = $produk[0]->id]) }}"
                                        class="variations_form cart" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id_produk" value="{{$produk[0]->id}}">
                                        <input type="hidden" name="nama_produk" value="{{$produk[0]->nama_produk}}">
                                        {{-- <input type="hidden" name="id_penyelenggara" value="{{$produk->penyelenggara[0]->id}}">
                                        --}}
                                        <div class="single_variation_wrap">
                                            <div class="kodory-variation single_variation"></div>
                                            <div class="kodory-variation-add-to-cart variations_button ">
                                                <div class="quantity">
                                                    <span class="qty-label">Quantiy:</span>
                                                    <div class="control">
                                                        <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                        <input required type="text" data-step="1" name="jumlah_pesanan"
                                                            value="1" title="Qty" class="input-qty input-text qty text"
                                                            size="4" pattern="[0-9]*">
                                                        <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                    </div>
                                                </div>
                                                <button type="submit" onclick="PesanSekarang(this)"
                                                    class="single_add_to_cart_button button alt kodory-variation-selection-needed">
                                                    Add to cart
                                                </button>

                                                <input name="add-to-cart" value="27" type="hidden">
                                                <input name="product_id" value="27" type="hidden">
                                                <input name="variation_id" class="variation_id" value="0" type="hidden">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <div class="yith-wcwl-add-button show">

                                        </div>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="product_meta">
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
                                        <span class="posted_in">Categories:
                                            <a href="#" rel="tag">{{ $produk[0]->kategori }}</a>
                                        </span>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="kodory-tabs kodory-tabs-wrapper">
                        <ul class="tabs dreaming-tabs" role="tablist">
                            <li class="additional_information_tab" id="tab-title-additional_information" role="tab"
                                aria-controls="tab-additional_information">
                                <a href="#tab-additional_information">Additional information</a>
                            </li>
                            <li class="description_tab active" id="tab-title-description" role="tab"
                                aria-controls="tab-description">
                                <a href="#tab-description">Penyelenggara</a>
                            </li>
                            <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a href="#tab-reviews">Reviews</a>
                            </li>
                        </ul>
                        <div class="kodory-Tabs-panel kodory-Tabs-panel--additional_information panel entry-content kodory-tab"
                            id="tab-additional_information" role="tabpanel"
                            aria-labelledby="tab-title-additional_information">
                            <h2>Additional information</h2>
                            <table class="shop_attributes">
                                <tbody>
                                    <tr>
                                        <th>Manfaat:</th>
                                        <td>
                                            <p>{{ $produk[0]->manfaat }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Metode Pembelajaran:</th>
                                        <td>
                                            <p>{{ $produk[0]->status_pertemuan }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Harga Termasuk:</th>
                                        <td>
                                            <p>{{ $produk[0]->bundling }}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="kodory-Tabs-panel kodory-Tabs-panel--description panel entry-content kodory-tab"
                            id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="/images/{{$produk[0]->icon_penyelenggara}}" alt="" width="500px">
                                        </div>
                                        <div class="col-lg-6 pl-3">
                                            <h4>{{$produk[0]->nama_penyelenggara}}</h4>
                                            <p>{{$produk[0]->kota_penyelenggara}}</p>
                                            <p>{{$produk[0]->deskripsi}}</p>
                                            <p>{{$produk[0]->jam_operasional}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="kodory-Tabs-panel kodory-Tabs-panel--reviews panel entry-content justify-content-center kodory-tab"
                            id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <div class="col-lg-6 text-center" style="border-radius: 20px; left: 25%">
                                <form action="{{route('storeUlasan_pd')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <h4>Komentar</h4>
                                        @if (empty(Auth::user()))
                                            <textarea class="form-control" name="penilaian" id="penilaian" readonly>Login dulu sebelum berkomentar!</textarea>
                                        @endif
                                        @if (!empty(Auth::user()))
                                            <textarea class="form-control" rows="3" name="penilaian" id="penilaian" style="border-radius: 10px;"></textarea>
                                        @endif
                                    </div>
                                    <input type="hidden" name="id_produk" value="{{$produk[0]->id}}">
                                    <div class="text-right m-3">
                                        <button type="submit" class="btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            
                            @foreach ($ulasans as $ulasan)
                               
                                    <div class="media ml-5 mt-5 mr-5">
                                        <img class="rounded-circle" src="https://www.pngitem.com/pimgs/m/150-1503945_transparent-user-png-default-user-image-png-png.png" alt="img" width="80px" style="align-items: center">
                                        <div class="media-body pl-3">
                                            <h4>{{$ulasan->nama}}</h4>
                                            <p>{{$ulasan->penilaian}}</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <a href="{{route('deleteUlasan_pd', ['id' => $ulasan->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#tes").click(function () {
            // var pr = document.getElementById("#pr");
            // if(pr.style.display == "none") {
            //     pr.style.display = "block"
            // }else {
            //     pr.style.display = "none"
            // }
            $("#pr").toggle();
        });

    });
</script>

@endsection