<header class="header-area">
    <!-- header top start -->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="/">
                            <img src="{{asset('assets/img/logo/logo.png')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header-settings-area">
                        <div class="header-top-left">
                            <nav>
                                <ul class="d-flex justify-content-center">
                                    <li>
                                        <div class="dropdown header-top-dropdown">
                                            <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                my account
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="myaccount">
                                                <a class="dropdown-item" href="{{route('my_account')}}">my account</a>
                                                <a class="dropdown-item" href="{{route('login')}}">login</a>
                                                <a class="dropdown-item" href="{{route('register')}}">register</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown header-top-dropdown">
                                            <span>Language:</span>
                                            <a class="dropdown-toggle" id="language" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                Vietnamese
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="language">
                                                <a class="dropdown-item" href="#">Vietnamese</a>
                                                <a class="dropdown-item" href="#">English</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-top-right">
                            <div class="header-search-box">
                                <form>
                                    <input type="text" placeholder="Search Here">
                                    <button><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
{{--                            <div class="mini-cart-wrap">--}}
{{--                                <button><i class="ion-bag"></i>--}}
{{--                                    <span class="notification">2</span>--}}
{{--                                </button>--}}
{{--                                <ul class="cart-list">--}}
{{--                                    <li>--}}
{{--                                        <div class="cart-img">--}}
{{--                                            <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg"--}}
{{--                                                                                alt=""></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-info">--}}
{{--                                            <h4><a href="product-details.html">simple product</a></h4>--}}
{{--                                            <span class="cart-qty">Qty: 1</span>--}}
{{--                                            <span>$60.00</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="del-icon">--}}
{{--                                            <i class="fa fa-times"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="cart-img">--}}
{{--                                            <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg"--}}
{{--                                                                                alt=""></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-info">--}}
{{--                                            <h4><a href="product-details.html">virtual product</a></h4>--}}
{{--                                            <span class="cart-qty">Qty: 2</span>--}}
{{--                                            <span>$100.00</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="del-icon">--}}
{{--                                            <i class="fa fa-times"></i>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="mini-cart-price">--}}
{{--                                        <span class="subtotal">subtotal : </span>--}}
{{--                                        <span class="subtotal-price ml-auto">$110.00</span>--}}
{{--                                    </li>--}}
{{--                                    <li class="checkout-btn">--}}
{{--                                        <a href="#">View Cart</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="checkout-btn">--}}
{{--                                        <a href="#">checkout</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->

    <!-- main menu start -->
    <div class="main-menu-area sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-menu">
                        <div class="sticky-logo">
                            <a href="index.html">
                                <img src="{{asset('assets/img/logo/logo_sticky.png')}}" alt="brand logo">
                            </a>
                        </div>
                        <!-- main menu navbar start -->
                        <nav id="mobile-menu">
                            <ul>
                                <li class="active"><a href="/">Trang chủ</a></li>
                                <li><a href="{{route('product.all')}}">Sản phẩm</a></li>
                                <li><a href="{{route('blog')}}">Tin Tức</a></li>
                                <li><a href="{{route('about')}}">Về chúng tôi</a></li>
                                <li><a href="{{route('contact')}}">Liên hệ</a></li>
                            </ul>
                        </nav>
                        <!-- main menu navbar end -->
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- main menu end -->

</header>
