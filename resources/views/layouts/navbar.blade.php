
<header id="header" class="header style-02 header-dark header-sticky header-transparent">
    <div class="header-wrap-stick">
        <div class="header-position">
            <div class="header-middle">
                <div class="kodory-menu-wapper"></div>
                <div class="header-middle-inner">
                    <div class="header-search-menu">
                        <div class="block-menu-bar">
                            <a class="menu-bar menu-toggle" href="#">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-logo-nav">
                        <div class="header-logo">
                            <a href="/"><img alt="" src="{{asset('images/logoo.png')}}" width="100px"
                            class="logo"></a></div>
                        <div class="box-header-nav menu-nocenter">
                            <ul id="menu-primary-menu"
                            class="clone-main-menu kodory-clone-mobile-menu kodory-nav main-menu">
                            @auth
                                
                           
                                                                 
                            <li id="menu-item-230"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="kodory-menu-item-title" title="" href="/">Home</a>
                                <div class="submenu megamenu megamenu-home"></div>
                            </li>
                            <li id="menu-item-228"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="kodory-menu-item-title" title=""
                                   href="{{ route ('katalog.index')}}">Katalog</a>
                            </li>
                            <li id="menu-item-229"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="kodory-menu-item-title" title="" href="{{ route ('pesanan.index')}}">Pesanan</a>
                            </li>
                            
                            <li id="menu-item-996"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="kodory-menu-item-title" title=""
                                   href="{{ route ('premium.index')}}">About</a>
                            </li>
                            <li id="menu-item-996"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="kodory-menu-item-title" title=""
                                   href="{{ route ('topup.index')}}">Top Up</a>
                            </li>
                            
                          
                            @endauth

                            @guest
                         
                            <li id="menu-item-230"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="kodory-menu-item-title" title="" href="/">Home</a>
                                <div class="submenu megamenu megamenu-home"></div>
                            </li>
                            <li id="menu-item-228"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="kodory-menu-item-title" title=""
                                   href="{{ route ('katalog.index')}}">Katalog</a>
                            </li>
                            
                            <li id="menu-item-996"
                                class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                <a class="kodory-menu-item-title" title=""
                                   href="{{ route ('premium.index')}}">About</a>
                            </li>

                            @endguest
                        </ul>
                        </div>
                    </div>
                    <div class="header-control">
                        <div class="header-control-inner">
                            <div class="meta-dreaming">
                                <div class="header-search kodory-dropdown">
                                    <div class="header-search-inner" data-kodory="kodory-dropdown">
                                        <a href="#" class="link-dropdown block-link">
                                            <span class="flaticon-magnifying-glass-1"></span>
                                        </a>
                                    </div>
                                    <div class="block-search">
                                        <form role="search" method="get" action="{{ route ('katalog.index')}}"
                                              class="form-search block-search-form kodory-live-search-form" style="padding-right: 2px;">
                                            <div class="form-content search-box results-search">
                                                <div class="inner">
                                                    <input v-model="search" autocomplete="off" id="input" class="searchfield txt-livesearch input"
                                                           name="s" value="" placeholder="Search here..." type="text">
                                                </div>
                                            </div>
                                            <input name="post_type" value="product" type="hidden">
                                            <input name="taxonomy" value="product_cat" type="hidden">
                                            <div class="category">
                                            </div>
                                            <button type="submit" class="btn-submit">
                                                <span class="flaticon-magnifying-glass-1"></span>
                                            </button>
                                            </form><!-- block search -->
                                          
                                            <div id="read" class="m-5 pl-3">
            
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="kodory-dropdown-close"></div>
                                <div class="menu-item block-user block-dreaming kodory-dropdown">                                                                   
                                 
                                    @guest
                                    <a class="block-link" href="#" data-toggle="modal" data-target="#login">
                                        <span class="flaticon-profile"></span>
                                    </a>
                                    @else

                                    <a class="block-link" href="{{ route ('akun.index') }}">
                                        <span class="flaticon-profile"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        @if (Auth::user()->role == 'penyelenggara')
                                        <li class=" menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">
                                            <a href="{{ route ('Penyelenggaras')}}">Dashboard Penyelenggara</a>
                                        </li>
                                        @elseif(Auth::user()->role == 'admin')
                                        <li class=" menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">
                                            <a href="{{ route('home')}}">Dashboard Admin</a>
                                        </li>
                                        @endif
                                        <li class=" menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">
                                            <a href="{{ route ('akun.index') }}">{{ Auth::user()->name }}</a>
                                        </li>
                                       
                                        <li class=" menu-item kodory-MyAccount-navigation-link kodory-MyAccount-navigation-link--orders">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">Logout</a>
                                        </li> 

                                    </ul>
                                    @include('auth.logout')
                                   @endguest
                                
                            </div>
                                @foreach ($orders as $order)
                                <div class="block-minicart block-dreaming kodory-mini-cart kodory-dropdown">
                                    <div class="shopcart-dropdown block-cart-link" data-kodory="kodory-dropdown">
                                        <a class="block-link link-dropdown" href="">
                                            <span class="flaticon-shopping-bag-1"></span>
                                            <span class="count">{{ $order->jumlah_pesanan }}</span>
                                        </a>
                                    </div>
                                    <div class="widget kodory widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                           
                                            <h3 class="minicart-title">Your Cart<span
                                                    class="minicart-number-items">{{ $order->jumlah_pesanan }}</span></h3>
                                            <ul>
                                                @foreach ( $order->gambar['gambar'] as $gambar)
                                                 <img
                                                src="/images/{{$gambar->gambar}}"
                                                alt="img" width="320" style="margin-left:10%; border-radius:6%;">
                                                @endforeach
                                            </ul>
                                            <p class="kodory-mini-cart__total total">{{ $order->produk->nama_produk }}<strong>Subtotal:</strong>
                                                <span class="kodory-Price-amount amount"><span
                                                        class="kodory-Price-currencySymbol">Rp.</span>{{ $order->produk->harga_produk  *  $order->jumlah_pesanan }}</span>
                                            </p>
                                            <p class="kodory-mini-cart__buttons buttons">
                                                <a href="{{ route ('pesanan.index')}}" class="button kodory-forward">Viewcart</a>
                                                <a href="#" data-toggle="modal" data-target="#pulsa"
                                                   class="button checkout kodory-forward">Checkout</a>
                                            </p>
                                            <div>
                                                @include('pesanan.checkout')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

