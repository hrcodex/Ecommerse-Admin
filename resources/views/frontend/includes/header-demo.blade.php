    <!-- top notificationbar start -->
    {{-- <section class="top-6" style="background-color: #2277aa;">
        <div class="container">
            <div class="row ">
                <div class="col">
                    <ul class="top-home">
                        <!-- offer text start -->
                        <li class="top-home-li t-content">
                            <p class="t-offer"><span class="top-off">Free shipping</span> orders from all item</p>
                        </li>
                        <!-- offer text start -->
                        <li class="top-home-li">
                            <ul class="top-dropdown">
                                <li class="top-dropdown-li notification-title"><a href="about-us.html">About us</a></li>
                                <li class="top-dropdown-li notification-title"><a href="contact.html">Contact us</a></li>
                                <!-- login start -->
                                <li class="top-dropdown-li">
                                    <a href="javascript:void(0)">Account</a>
                                    <i class="ion-ios-arrow-down"></i>
                                    <ul class="account">
                                        <li><a href="register.html">register / log in</a></li>
                                        <li><a href="checkout-3.html">checkout</a></li>
                                        <li><a href="wishlist.html">my wishlist</a></li>
                                        <li><a href="order-complete.html">order history</a></li>
                                        <li><a href="cart-3.html">my cart</a></li>
                                    </ul>
                                </li>
                                <!-- login end -->
                                <!-- currency start -->
                                <li class="top-dropdown-li">
                                    <a href="javascript:void(0)">CAD</a>
                                    <i class="ion-ios-arrow-down"></i>
                                    <ul class="currency">
                                        <li><a href="javascript:void(0)">AFN</a></li>
                                        <li><a href="javascript:void(0)">BDT</a></li>
                                        <li><a href="javascript:void(0)">CAD</a></li>
                                        <li><a href="javascript:void(0)">EUR</a></li>
                                        <li><a href="javascript:void(0)">GBP</a></li>
                                    </ul>
                                </li>
                                <!-- currency end -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- top notificationbar start -->
    <!-- header start -->
    <header class="hrx-header-area">
        <div class="hrx-header-main-area" style="border-bottom:1px solid white;background-color: #53afd3;">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="hrx-header-main">
                            <!-- logo start -->
                            <div class="hrx-header-element logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/frontend') }}/image/hrcodex/logo.png" alt="logo-image" class="img-fluid">
                                </a>
                            </div>
                            <!-- logo end -->
                            <!-- search start -->
                            <div class="hrx-header-element hrx-header-search">
                                <form>
                                    <input type="text" name="search" placeholder="Search Product.">
                                    <a href="{{ route('shop') }}" class="search-btn"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                            <!-- search end -->
                            <!-- header icon start -->
                            <div class="hrx-header-element right-block-box">
                                <ul class="shop-element">

                                    <li class="side-wrap search-wrap">
                                        <!-- mobile search start -->
                                        <div class="search-rap">
                                            <a href="#search-modal" class="search-popuup" data-bs-toggle="modal"><i class="ion-ios-search-strong"></i></a>
                                        </div>
                                        <!-- mobile search end -->
                                    </li>

                                    <li class="side-wrap cart-wrap">
                                        <div class="shopping-widget">
                                            <div class="shopping-cart">
                                                <a href="tel:01790370183" class="cart-count">
                                                    <span class="cart-icon-wrap">
                                                        <span class="cart-icon"><i class="icon-phone"></i>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="side-wrap cart-wrap">
                                        <div class="shopping-widget">
                                            <div class="shopping-cart">
                                                {{-- <a href="javascript:void(0)" class="cart-count"> --}}
                                                <a href="{{ route('chackout') }}" class="cart-count">
                                                    <span class="cart-icon-wrap">
                                                        <span class="cart-icon"><i class="icon-handbag"></i>
                                                            <span id="cart-total" class="bigcounter">5</span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- header icon end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- menu start  -->

            <!-- menu end -->
        </div>
        <!-- mobile menu start -->

        <!-- mobile menu end -->
        <!-- minicart start -->
        {{-- <div class="mini-cart">
            <a href="" class="shopping-cart-close"><i class="ion-close-round"></i></a>
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
        <!-- mobile search start -->
        <div class="modal fade" id="search-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="search-content">
                                        <div class="search-engine">
                                            <input type="text" name="search" placeholder="Search Product.">
                                            <a href="search.html" class="search-btn"><i class="ion-ios-search-strong"></i></a>
                                        </div>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></button>
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
    <!-- header end -->
