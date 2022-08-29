
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
                                       href="{{ route ('premium.index')}}">Premium</a>
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
                                       href="{{ route ('premium.index')}}">Premium</a>
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
                                                <select title="product_cat" name="product_cat" id="64788262"
                                                        class="category-search-option"
                                                        tabindex="-1" style="display: none;">
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
                                <div class="kodory-dropdown-close"></div>
                                <div class="menu-item block-user block-dreaming kodory-dropdown">
                                    <a class="block-link" href="#">
                                        <span class="flaticon-profile"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        @guest
                                        <a href="#" data-toggle="modal" data-target="#login">
                                            <h5>Login</h5>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#register">
                                            <h5>Register</h5>
                                        </a>
                                        @else
                                        <a href="{{ route ('akun.index') }}" >
                                            <h5> <i class="fa fa-user-circle"></i> {{ Auth::user()->name }}</h5>
                                        </a>
                                        <form action="{{ route ('logout')}}" method="post">
                                            {{ csrf_field() }}
                                        <button type="submit" class="btn btn-info">Logout</button>
                                        </form>
                                        @endguest
                                    </ul>
                                </div>
                                <div class="block-minicart block-dreaming kodory-mini-cart kodory-dropdown">
                                    <div class="shopcart-dropdown block-cart-link" data-kodory="kodory-dropdown">
                                        <a class="block-link link-dropdown" href="">
                                            <span class="flaticon-shopping-bag-1"></span>
                                            <span class="count">0</span>
                                        </a>
                                    </div>
                                    <div class="widget kodory widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                            <h3 class="minicart-title">Your Cart<span
                                                    class="minicart-number-items">0</span></h3>
                                            <ul class="kodory-mini-cart cart_list product_list_widget"></ul>
                                            <p class="kodory-mini-cart__total total"><strong>Subtotal:</strong>
                                                <span class="kodory-Price-amount amount"><span
                                                        class="kodory-Price-currencySymbol">$</span></span>
                                            </p>
                                            <p class="kodory-mini-cart__buttons buttons">
                                                <a href="{{ route ('pesanan.index')}}" class="button kodory-forward">Viewcart</a>
                                                <a href="#"
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
    </div>
</header>
