@extends('web.layout.index')
@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h2>Sản phẩm</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">sản phẩm</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper pt-60 pb-60">
        <div class="container">
            <div class="row">
                <!-- sidebar area start -->
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="sidebar-wrapper mt-md-60 mt-sm-60">
                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <div class="sidebar-title">
                                <h3>Danh mục sản phẩm</h3>
                            </div>
                            <div class="sidebar-body">
                                <ul class="sidebar-category">
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">fruits</a></li>
                                    <li><a href="#">juice</a></li>
                                    <li><a href="#">meats</a></li>
                                    <li><a href="#">vegetables</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->
                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <div class="sidebar-title">
                                <h3>Lọc theo giá</h3>
                            </div>
                            <div class="sidebar-body">
                                <div class="price-range-wrap">
                                    <div class="price-range" data-min="20" data-max="400"></div>
                                    <div class="range-slider">
                                        <form action="#">
                                            <div class="price-input">
                                                <label for="amount">Giá: </label>
                                                <input type="text" id="amount">
                                            </div>
                                            <button class="filter-btn">Lọc</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single sidebar end -->
                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <div class="sidebar-banner">
                                <a href="#">
                                    <img src="{{asset('assets/img/banner/banner_left.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single sidebar end -->
                    </div>
                </div>
                <!-- sidebar area end -->
                <!-- shop main wrapper start -->
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="shop-product-wrapper">
                        <!-- shop product top wrap start -->
                        <div class="shop-top-bar">
                            <div class="row">
                                <div class="col-xl-5 col-lg-4 col-md-3 order-2 order-md-1">
                                    <div class="top-bar-left">
                                        <div class="product-view-mode">
                                            <a class="active" href="#" data-target="grid-view"><i class="fa fa-th"></i></a>
                                            <a href="#" data-target="list-view"><i class="fa fa-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-8 col-md-9 order-1 order-md-2">
                                    <div class="top-bar-right">
                                        <div class="product-short">
                                            <p>Sort By : </p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">Relevance</option>
                                                <option value="sales">Name (A - Z)</option>
                                                <option value="sales">Name (Z - A)</option>
                                                <option value="rating">Price (Low &gt; High)</option>
                                                <option value="date">Rating (Lowest)</option>
                                                <option value="price-asc">Model (A - Z)</option>
                                                <option value="price-asc">Model (Z - A)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop product top wrap start -->

                        <!-- product item list start -->
                        <div class="shop-product-wrap grid-view row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-1.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-3.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-3.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-4.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-4.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-5.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-5.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-6.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-6.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-7.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-7.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-8.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-8.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-9.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-9.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-10.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-10.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-11.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-11.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-50">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-12.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4 class="h5">
                                                <a href="product-details.html">Condimentum food</a>
                                            </h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$110.00</span>
                                            <span class="old-price"><del></del></span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                                <!-- product list item start -->
                                <div class="product-list-item mb-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/product-12.jpg" alt="">
                                        </a>
                                        <div class="quick-view-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" title="Quick view"><i class="ion-ios-eye-outline"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-list">
                                        <div class="ratings">
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                            <span><i class="ion-android-star"></i></span>
                                        </div>
                                        <div class="product-name">
                                            <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">$160.00</span>
                                            <span class="old-price"><del>$130.00</del></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere
                                            metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet
                                            sem vitae urna fringilla tempus.</p>
                                        <div class="action-link">
                                            <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                                to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product list item start -->
                            </div>
                        </div>
                        <!-- product item list end -->

                        <!-- start pagination area -->
                        <div class="paginatoin-area text-center mt-30">
                            <ul class="pagination-box">
                                <li><a class="Previous" href="#"><i class="ion-ios-arrow-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="Next" href="#"><i class="ion-ios-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- end pagination area -->
                    </div>
                </div>
                <!-- shop main wrapper end -->
            </div>
        </div>
    </div>

<!-- main wrapper end -->

<!-- Quick view modal start -->
<div class="modal" id="quick_view">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- product details inner end -->
                <div class="product-details-inner">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="product-large-slider mb-20 slider-arrow-style slider-arrow-style__style-2">
                                <div class="pro-large-img">
                                    <img src="assets/img/product/product-details-img1.jpg" alt="" />
                                </div>
                                <div class="pro-large-img">
                                    <img src="assets/img/product/product-details-img2.jpg" alt="" />
                                </div>
                                <div class="pro-large-img">
                                    <img src="assets/img/product/product-details-img3.jpg" alt="" />
                                </div>
                                <div class="pro-large-img">
                                    <img src="assets/img/product/product-details-img4.jpg" alt="" />
                                </div>
                            </div>
                            <div class="pro-nav slick-padding_2 slider-arrow-style slider-arrow-style__style-2">
                                <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img1.jpg"
                                                                alt="" /></div>
                                <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img2.jpg"
                                                                alt="" /></div>
                                <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img3.jpg"
                                                                alt="" /></div>
                                <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img4.jpg"
                                                                alt="" /></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-des">
                                <div class="product-content-list">
                                    <div class="ratings">
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                        <span><i class="ion-android-star"></i></span>
                                    </div>
                                    <div class="product-name">
                                        <h4><a href="product-details.html">Organic vegetables</a></h4>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$160.00</span>
                                        <span class="old-price"><del>$130.00</del></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                        nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                        ornare lectus quis justo gravida semper.</p>
                                    <div class="action-link mb-20">
                                        <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add
                                            to cart</a>
                                    </div>
                                    <div class="quantity mb-20">
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </div>
                                    <div class="availability mb-20">
                                        <h5>Availability:</h5>
                                        <span>10 in stock</span>
                                    </div>
                                    <div class="share-icon">
                                        <h5>share:</h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details inner end -->
            </div>
        </div>
    </div>
</div>
<!-- Quick view modal end -->

@endsection
