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
        <nav class="kodory-breadcrumb"><a href="index.html">Home</a><i class="fa fa-angle-right"></i><a href="#">Shop</a>
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
                                <div class="kodory-product-gallery kodory-product-gallery--with-images kodory-product-gallery--columns-4 images">
                                    <a href="#" class="kodory-product-gallery__trigger">
                                        <img draggable="false" class="emoji" alt="🔍"
                                             src="https://s.w.org/images/core/emoji/11/svg/1f50d.svg"></a>
                                    <div class="flex-viewport">
                                        <figure class="kodory-product-gallery__wrapper">
                                            @foreach ($produk->gambar as $g)
                                            <div class="kodory-product-gallery__image">
                                                <img alt="img"
                                                src="/images/{{$g->gambar}}">
                                            </div>
                                            @endforeach
                                        </figure>
                                    </div>
                                    <ol class="flex-control-nav flex-control-thumbs">
                                        @foreach ($produk->gambar as $g)
                                            
                                        <li><img
                                                src="/images/{{$g->gambar}}"
                                                alt="img">
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
                                    <form action="{{ route ('checkout', [$id = $produk->id]) }}" class="variations_form cart" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id_produk" value="{{$produk->id}}">
                                        {{-- <input type="hidden" name="id_penyelenggara" value="{{$produk->penyelenggara[0]->id}}"> --}}
                                    <div class="single_variation_wrap">
                                        <div class="kodory-variation single_variation"></div>
                                        <div class="kodory-variation-add-to-cart variations_button ">
                                            <div class="quantity">
                                                <span class="qty-label">Quantiy:</span>
                                                <div class="control">
                                                    <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                    <input required type="text" data-step="1" name="jumlah_pesanan" value="1" title="Qty" class="input-qty input-text qty text" size="4" pattern="[0-9]*">
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
                                        <a href="#"rel="tag">{{ $produk->kategori }}</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kodory-tabs kodory-tabs-wrapper">
                        <ul class="tabs dreaming-tabs" role="tablist">
                            <li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                            <a href="#tab-additional_information">Additional information</a>
                        </li>
                            <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                                <a href="#tab-description">Penyelenggara</a>
                            </li>
                            <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a href="#tab-reviews">Reviews (0)</a>
                            </li>
                        </ul>
                             <div class="kodory-Tabs-panel kodory-Tabs-panel--additional_information panel entry-content kodory-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">
                            <h2>Additional information</h2>
                                <table class="shop_attributes">
                                    <tbody>
                                    <tr>
                                        <th>Manfaat:</th>
                                        <td><p>{{ $produk->manfaat }}</p></td>
                                    </tr>
                                    <tr>
                                        <th>Metode Pembelajaran:</th>
                                        <td><p>{{ $produk->status_pertemuan }}</p></td>
                                    </tr>
                                    <tr>
                                        <th>Harga Termasuk:</th>
                                        <td><p>{{ $produk->bundling }}</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        
                        <div class="kodory-Tabs-panel kodory-Tabs-panel--description panel entry-content kodory-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                            <h2>Penyelenggara</h2>
                            <div class="container-table">
                                <div class="container-cell">
                                </div>
                                <div class="container-cell">
                                </div>
                            </div>
                            <div class="container-table">
                                <div class="container-cell">
                                </div>
                                <div class="container-cell">
                                </div>
                            </div>
                        </div>
                       
                        <div class="kodory-Tabs-panel kodory-Tabs-panel--reviews panel entry-content kodory-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <div id="reviews" class="kodory-Reviews">
                                <div id="comments">
                                    <h2 class="kodory-Reviews-title">Reviews</h2> 
                                    <p class="kodory-noreviews">There are no reviews yet.</p>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <span id="reply-title" class="comment-reply-title">Be the first to review this product</span>
                                            <form id="commentform" class="comment-form">  
                                                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>
                                                    Required fields are marked <span class="required">*</span></p>

                                                <p class="comment-form-author">
                                                    <label for="author">Name&nbsp;<span class="required">*</span></label>
                                                    <input id="author" name="author" value="" size="30" required="" type="text"></p>

                                                <p class="comment-form-email"><label for="email">Email&nbsp;
                                                    <span class="required">*</span></label>
                                                    <input id="email" name="email" value="" size="30" required="" type="email"></p>
                                                    
                                                <div class="comment-form-rating"><label for="rating">Your rating</label>
                                                    <p class="stars">
                                                        <span>
                                                        <a class="star-1" href="#">1</a>
                                                        <a class="star-2" href="#">2</a>
                                                        <a class="star-3" href="#">3</a>
                                                        <a class="star-4" href="#">4</a>
                                                        <a class="star-5" href="#">5</a>
                                                        </span>
                                                    </p>
                                                    <select title="product_cat" name="rating" id="rating" required="" style="display: none;">
                                                        <option value="">Rate…</option>
                                                        <option value="5">Perfect</option>
                                                        <option value="4">Good</option>
                                                        <option value="3">Average</option>
                                                        <option value="2">Not that bad</option>
                                                        <option value="1">Very poor</option>
                                                    </select></div>
                                                <p class="comment-form-comment"><label for="comment">Your review&nbsp;<span class="required">*</span></label>
                                                    <textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea></p>
                                                    <input name="wpml_language_code" value="en" type="hidden">
                                                <p class="form-submit"><input name="submit" id="submit" class="submit" value="Submit" type="submit"> 
                                                    <input name="comment_post_ID" value="27" id="comment_post_ID" type="hidden">
                                                    <input name="comment_parent" id="comment_parent" value="0" type="hidden">
                                                </p>
                                            </form>
                                        </div><!-- #respond -->
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#tes").click(function(){
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

