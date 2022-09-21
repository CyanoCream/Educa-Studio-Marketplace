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
                                            @foreach ($produk->gambar as $g)
                                            <div class="kodory-product-gallery__image">
                                                <img alt="img" src="/images/{{$g->gambar}}">
                                            </div>
                                            @endforeach
                                        </figure>
                                    </div>
                                    <ol class="flex-control-nav flex-control-thumbs">
                                        @foreach ($produk->gambar as $g)

                                        <li><img src="/images/{{$g->gambar}}" alt="img">
                                        </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <div class="summary entry-summary">
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                <h1 class="product_title entry-title">{{ $produk->nama_produk }}</h1>
                                <p class="price"><span class="kodory-Price-amount amount"><span
                                            class="kodory-Price-currencySymbol">Rp.</span>{{ $produk->harga_produk }}</span>
                                    <p class="stock in-stock">
                                        Stock Available: <span>{{ $produk->stock }}</span>
                                    </p>
                                    <div class="kodory-product-details__short-description">
                                        <p>{{ $produk->keterangan }}</p>
                                        <ul>
                                            <li>{{ $produk->manfaat }}</li>
                                        </ul>
                                    </div>
                                    <form action="{{ route ('checkout', [$id = $produk->id]) }}"
                                        class="variations_form cart" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id_produk" value="{{$produk->id}}">
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
                                            <a href="#" rel="tag">{{ $produk->kategori }}</a>
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
                                            <p>{{ $produk->manfaat }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Metode Pembelajaran:</th>
                                        <td>
                                            <p>{{ $produk->status_pertemuan }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Harga Termasuk:</th>
                                        <td>
                                            <p>{{ $produk->bundling }}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="kodory-Tabs-panel kodory-Tabs-panel--description panel entry-content kodory-tab"
                            id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                            <h2>Penyelenggara</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>id produk</th>
                                        <th>icon penyelenggara</th>
                                        <th>nama penyelenggara</th>
                                        <th>kota penyelenggara</th>
                                        <th>deskripsi</th>
                                        <th>jam operasional</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($penyelenggaras as $penyelenggara)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $penyelenggara->produk }}</td>
                                    <td><img src="/images/{{ $penyelenggara->icon_penyelenggara}}" alt="" width="100px">
                                    </td>
                                    <td>{{ $penyelenggara->nama_penyelenggara }}</td>
                                    <td>{{ $penyelenggara->kota_penyelenggara }}</td>
                                    <td>{{ $penyelenggara->deskripsi }}</td>
                                    <td>{{ $penyelenggara->jam_operasional }}</td>
                                    <td>
                                        <a onclick="edit(this)"
                                            data-url="{{route('editPenyelenggara_penyelenggara', ['id' => $penyelenggara->id])}}"
                                            class="btn btn-warning btn-sm" role="button">Edit</a>
                                        <a onclick="confirmDelete(this)"
                                            data-url="{{route('deletePenyelenggara_penyelenggara', ['id' => $penyelenggara->id])}}"
                                            class="btn btn-danger btn-sm" role="button">Hapus</a>
                                    </td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>

                        <div class="kodory-Tabs-panel kodory-Tabs-panel--reviews panel entry-content kodory-tab"
                            id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            {{-- {{csrf_field()}}
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="penilaian">Your review&nbsp;</label>
                                    @if (empty(Auth::user()))
                                        <textarea class="form-control" id="penilaian" name="penilaian" rows="3"></textarea>
                                    @endif
                                    @if (empty(Auth::user()))
                                        <input type="hidden" class="form-control" name="nama">
                                        <input class="form-control" type="text" id="nama" name="nama">
                                    @endif
                                </div>
                                <button type="submit" class="btn-primary">Submit</button>
                            </form>
                            <div class="card mt-3">
                                <div class="card-body">
                                    @foreach ($ulasans as $u)
                                        <div class="media">
                                            <img class="mr-3 rounded-circle" alt="img" src="https://img1.pngdownload.id/20180714/ggq/kisspng-user-profile-computer-icons-login-clip-art-profile-picture-icon-5b49de2f1ef441.4301202215315676631268.jpg" />
                                            <div class="media-body">
                                                <h5>{{$u->name}}</h5>
                                                <p>{{$u->penilaian}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div> --}}
                            <div class="card">
                                <div class="card-body">
                                    {{csrf_field()}}
                                    <form action="{{route('daftarUlasan_pd')}}" method="post">
                                        <div class="form-group">
                                            <p>Komentar :</p>
                                            @if (empty(Auth::user()))
                                                <textarea class="form-control" name="penilaian" id="penilaian" readonly>Login dulu sebelum berkomentar!</textarea>
                                            @endif
                                            @if (!empty(Auth::user()))
                                                <input class="form-control" type="hidden" name="nama" id="nama">
                                                <textarea class="form-control" name="penilaian" id="penilaian"></textarea>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>

                            {{-- @foreach ($ulasans as $ulasan)
                                @if ($ulasan->id_produk==$id)
                                    <div class="media mb-4">
                                        <img class="mr-3 rounded-circle" alt="img" src="https://img1.pngdownload.id/20180714/ggq/kisspng-user-profile-computer-icons-login-clip-art-profile-picture-icon-5b49de2f1ef441.4301202215315676631268.jpg">
                                        <div class="media-body">
                                            <h5 class="mt-0">{{$ulasan->name}}</h5>
                                            <p>{{$ulasan->penilaian}}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach --}}
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