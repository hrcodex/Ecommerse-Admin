@php
    $categories =  DB::table('categories')->where('status', 'published')->get();
      $generalsettings =  DB::table('generalsettings')->first();

@endphp
    <!-- top notificationbar start -->
    @if($generalsettings->home_top_bar == 1)

     <section class="top-6" style="background-color: #2277aa;">
        <div class="container">
            <div class="row ">
                <div class="col">
                    <ul class="top-home">
                        <li class="top-home-li">
                            <ul class="top-dropdown">
                                 <!-- login start -->
                                <li class="top-dropdown-li">
                                    <p class="t-offer"><span class="top-off" style="margin-right: 20px">Fast shipping</span>orders from all item</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </section>
      @endif

     <header class="hrx-header-area">
     <div class="hrx-header-main-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="hrx-header-main">
                        <!-- logo start -->
                        <div class="hrx-header-element logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('images/assets/front-logo.png') }}" alt="logo-image" class="img-fluid">
                            </a>
                        </div>
                        <!-- logo end -->
                        <!-- search--------------------Big start -->
                        <div class="hrx-header-element hrx-header-search">
                            <form action="{{ route('search') }}" method="GET">
                                <input type="text" name="query" value="{{ request()->input('query') }}" placeholder="Search Product">
                                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!-- search end -->
                        <!-- hrx-header icon start -->
                        <div class="hrx-header-element right-block-box">
                            <ul class="shop-element">

                                <li class="side-wrap search-wrap">
                                    <!-- mobile search start -->
                                    <div class="search-rap">
                                        <a href="#search-modal" class="search-popuup" data-bs-toggle="modal"><i class="ion-ios-search-strong"></i></a>
                                    </div>
                                    <!-- mobile search end -->
                                </li>

                                {{-- <li class="side-wrap cart-wrap">
                                    <div class="shopping-widget">
                                        <div class="shopping-cart">
                                            <a href="@if (session()->has('qty')){{ route('cheakout.cart',['product_id_cart'=>session('product_id_cart')]) }}
                                                @else
                                                #@endif" class="cart-count">
                                                <span class="cart-icon-wrap">
                                                    <span class="cart-icon"><i class="icon-handbag"></i>
                                                        <span id="cart-total" class="bigcounter">@if (session()->has('qty'))1
                                                            @else
                                                            0

                                                        @endif</span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li> --}}
                                <li class="side-wrap nav-toggler">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                    <span class="line"></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <!-- hrx-header icon end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- menu start  -->
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top-menu">
                            <!-- megamenu start -->
                            <div class="hrx-header-element megamenu-content">
                                <div class="mainwrap">
                                    <ul class="main-menu">
                                        <li class="menu-link parent">
                                            <a href="{{ route('home') }}" class="link-title">
                                                <span class="sp-link-title">Home</span>
                                            </a>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="{{ route('shop') }}" class="link-title">
                                                <span class="sp-link-title">Shop</span>
                                            </a>
                                        </li>

                                        <li class="menu-link parent">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Category</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            @isset($categories)
                                            <ul class="dropdown-submenu sub-menu collapse" id="collapse-top-page-menu">

                                                @foreach ($categories as $categorie)

                                                <li class="submenu-li">
                                                    <a href="{{ route('category',['id'=>$categorie->id]) }}" class="submenu-link">{{ $categorie->name }}</a>
                                                </li>

                                                @endforeach
                                            </ul>
                                            @endisset

                                        </li>
                                        <li class="menu-link parent">
                                            <a href="{{ route('faq') }}" class="link-title">
                                                <span class="sp-link-title">About Us</span>
                                            </a>
                                        </li>

                                        {{-- <li class="menu-link parent">
                                            <a href="{{ route('chackout') }}" class="link-title">
                                                <span class="sp-link-title">chackout</span>
                                            </a>
                                        </li> --}}

                                        {{-- <li class="menu-link">
                                            <a href="javascript:void(0)" class="link-title">
                                                <span class="sp-link-title">Buy vegist <span class="hot">Hot</span></span>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <!-- megamenu end -->
                            <!-- hotline start -->
                            <div class="hotline">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/frontend') }}/image/icon_contact.png" class="img-fluid" alt="image-icon"></a>
                                <div class="image-content">
                                    <span class="hot-l">Phone:</span>
                                    @isset( $generalsettings->phone)
                                    <span>{{ $generalsettings->phone }}</span>
                                    @endisset

                                </div>
                            </div>
                            <!-- hotline end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- menu end -->
     </div>
     <!-- mobile menu start -->
     <div class="hrx-header-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-menu-area">
                        <div class="main-navigation navbar-expand-xl">
                            {{-- <div class="box-hrx-header menu-close">
                                <button class="close-box" type="button"><i class="ion-close-round"></i></button>
                            </div> --}}
                            <div class="navbar-collapse" id="navbarContent">
                                <!-- main-menu start -->
                                <div class="megamenu-content">
                                    <div class="mainwrap">
                                        <ul class="main-menu">
                                            <li class="menu-link">
                                                <a href="{{ route('home') }}" class="link-title">
                                                    <span class="sp-link-title">Home</span>
                                                </a>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{ route('shop') }}" class="link-title">
                                                    <span class="sp-link-title">Shop</span>
                                                </a>
                                            </li>


                                            <li class="menu-link parent">

                                                <a href="#collapse-page-menu" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Category</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                @isset($categories)
                                                <ul class="dropdown-submenu sub-menu collapse" id="collapse-page-menu">
                                                    @foreach ($categories as $categorie)
                                                    <li class="submenu-li">
                                                        <a href="{{ route('category',['id'=>$categorie->id]) }}" class="submenu-link">{{ $categorie->name }}</a>
                                                    </li>

                                                    @endforeach
                                                </ul>
                                                @endisset
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{ route('faq') }}" class="link-title">
                                                    <span class="sp-link-title">Faq</span>
                                                </a>
                                            </li>

                                            {{-- <li class="menu-link">
                                                <a href="javascript:void(0)" class="link-title">
                                                    <span class="sp-link-title">Buy vegist <span class="hot">Hot</span></span>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <!-- main-menu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <!-- mobile menu end -->
     <!-- minicart start -->
     {{-- <div class="mini-cart">
        <a href="javascript:void(0)" class="shopping-cart-close"><i class="ion-close-round"></i></a>
        <div class="cart-item-title">
            <p>
                <span class="cart-count-desc">There are</span>
                <span class="cart-count-item bigcounter">4</span>
                <span class="cart-count-desc">Products</span>
            </p>
        </div>
        <ul class="cart-item-loop">
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product-style-6.html">
                        <img src="{{ asset('assets/frontend') }}/image/cart-img.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product-style-6.html">Fresh apple 5kg</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$250.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product-style-6.html">
                        <img src="{{ asset('assets/frontend') }}/image/cart-img02.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product-style-6.html">Natural grassbean 4kg</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$300.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product-style-6.html">
                        <img src="{{ asset('assets/frontend') }}/image/cart-img03.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product-style-6.html">Organic coconut juice 5ltr</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$250.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-img">
                    <a href="product-style-6.html">
                        <img src="{{ asset('assets/frontend') }}/image/cart-img04.jpg" alt="cart-image" class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="product-style-6.html">Orange juice 5ltr</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">1 x </span>
                            <span class="price-box">$350.00 USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="empty-cart.html"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="subtotal-title-area">
            <li class="subtotal-info">
                <div class="subtotal-titles">
                    <h6>Sub total:</h6>
                    <span class="subtotal-price">$750.00 USD</span>
                </div>
            </li>
            <li class="mini-cart-btns">
                <div class="cart-btns">
                    <a href="cart-3.html" class="btn btn-style1"><span>View cart</span></a>
                    <a href="checkout-3.html" class="btn btn-style1"><span>Checkout</span></a>
                </div>
            </li>
        </ul>
        </div> --}}
        <!-- minicart end -->
        <!-- mobile----------------------small-------------- search start -->
        <div class="modal fade" id="search-modal">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="search-content">
                                    <form action="{{ route('search') }}" method="GET">
                                    <div class="search-engine">
                                        <input type="text" name="query" value="{{ request()->input('query') }}"placeholder="Search Product">
                                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                                    </div>

                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile search end -->
</header>
