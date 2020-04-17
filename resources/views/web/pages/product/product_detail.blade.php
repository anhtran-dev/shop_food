@extends('web.layout.index')
@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h2>shop</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">product details</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="product-details-wrapper pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="product-large-slider img-zoom mb-20 slider-arrow-style slider-arrow-style__style-2">
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
                        <div class="pro-large-img">
                            <img src="assets/img/product/product-details-img4.jpg" alt="" />
                        </div>
                    </div>
                    <div class="pro-nav slick-padding_2 slider-arrow-style slider-arrow-style__style-2">
                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img1.jpg" alt="" /></div>
                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img2.jpg" alt="" /></div>
                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img3.jpg" alt="" /></div>
                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img4.jpg" alt="" /></div>
                        <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img5.jpg" alt="" /></div>
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
                                <h4><a href="product-details.html">Condimentum organic vegetables</a></h4>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$160.00</span>
                                <span class="old-price"><del>$130.00</del></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus
                                quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu,
                                suscipit id nulla.</p>
                            <div class="action-link mb-20">
                                <a href="#" data-toggle="tooltip" title="Add to cart" class="add-to-cart">add to
                                    cart</a>
                                <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                <a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
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
            <div class="row">
                <div class="col-lg-12">
                    <!-- product details reviews start -->
                    <div class="product-details-reviews pt-60">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-review-info">
                                    <div class="review-tab">
                                        <ul class="nav">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#tab_three">reviews</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="tab_one">
                                            <div class="tab-one">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                    fringilla augue nec est tristique auctor. Ipsum metus feugiat
                                                    sem, quis fermentum turpis eros eget velit. Donec ac tempus
                                                    ante. Fusce ultricies massa massa. Fusce aliquam, purus eget
                                                    sagittis vulputate, sapien libero hendrerit est, sed commodo
                                                    augue nisi non neque
                                                    Cras neque metus, consequat et blandit et, luctus a nunc. Etiam
                                                    gravida vehicula tellus, in imperdiet ligula euismod eget.
                                                    Pellentesque habitant morbi tristique senectus et netus et
                                                    malesuada fames ac turpis egestas</P>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_three">
                                            <form action="#" class="review-form">
                                                <h5>1 review for <span>Chaz Kangeroo Hoodies</span></h5>
                                                <div class="total-reviews">
                                                    <div class="rev-avatar">
                                                        <img src="assets/img/about/avatar.jpg" alt="">
                                                    </div>
                                                    <div class="review-box">
                                                        <div class="ratings">
                                                            <span><i class="ion-android-star"></i></span>
                                                            <span><i class="ion-android-star"></i></span>
                                                            <span><i class="ion-android-star"></i></span>
                                                            <span><i class="ion-android-star"></i></span>
                                                            <span><i class="ion-android-star"></i></span>
                                                        </div>
                                                        <div class="post-author">
                                                            <p><span>admin -</span> 30 Nov, 2018</p>
                                                        </div>
                                                        <p>Aliquam fringilla euismod risus ac bibendum. Sed sit
                                                            amet sem varius ante feugiat lacinia. Nunc ipsum nulla,
                                                            vulputate ut venenatis vitae, malesuada ut mi. Quisque
                                                            iaculis, dui congue placerat pretium, augue erat
                                                            accumsan lacus</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Name</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Email</label>
                                                        <input type="email" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Review</label>
                                                        <textarea class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Rating</label>
                                                        &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                        <input type="radio" value="1" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="2" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="3" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="4" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="5" name="rating" checked>
                                                        &nbsp;Good
                                                    </div>
                                                </div>
                                                <div class="buttons">
                                                    <button class="btn btn__btn-gray" type="submit">Continue</button>
                                                </div>
                                            </form> <!-- end of review-form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details reviews end -->
                </div>
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->

    <!-- related product area start -->
    <section class="related-product pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>related product</h2>
                    </div>
                </div>
            </div>
            <div class="row related-product-active slick-arrow-style">
                <div class="col">
                    <div class="product-item mb-50">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="assets/img/product/product-6.jpg" alt="">
                            </a>
                            <div class="quick-view-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                                                                 title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
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
                                    <a href="product-details.html">Condimen food</a>
                                </h4>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$110.00</span>
                                <span class="old-price"><del></del></span>
                            </div>
                            <div class="product-action-link">
                                <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                <a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-item mb-50">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="assets/img/product/product-3.jpg" alt="">
                            </a>
                            <div class="quick-view-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                                                                 title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
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
                                    <a href="product-details.html">organic food</a>
                                </h4>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$110.00</span>
                                <span class="old-price"><del></del></span>
                            </div>
                            <div class="product-action-link">
                                <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                <a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-item mb-50">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="assets/img/product/product-2.jpg" alt="">
                            </a>
                            <div class="quick-view-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                                                                 title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
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
                                    <a href="product-details.html">Condimentum fruits</a>
                                </h4>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$110.00</span>
                                <span class="old-price"><del></del></span>
                            </div>
                            <div class="product-action-link">
                                <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                <a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-item mb-50">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="assets/img/product/product-1.jpg" alt="">
                            </a>
                            <div class="quick-view-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                                                                 title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
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
                                    <a href="product-details.html">organic vegetables</a>
                                </h4>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$110.00</span>
                                <span class="old-price"><del></del></span>
                            </div>
                            <div class="product-action-link">
                                <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                <a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-item mb-50">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="assets/img/product/product-8.jpg" alt="">
                            </a>
                            <div class="quick-view-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                                                                 title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
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
                                    <a href="product-details.html">Condimentum fruits</a>
                                </h4>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$110.00</span>
                                <span class="old-price"><del></del></span>
                            </div>
                            <div class="product-action-link">
                                <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                <a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-item mb-50">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img src="assets/img/product/product-10.jpg" alt="">
                            </a>
                            <div class="quick-view-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                                                                 title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
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
                                    <a href="product-details.html">dimentum vegetables</a>
                                </h4>
                            </div>
                            <div class="price-box">
                                <span class="regular-price">$110.00</span>
                                <span class="old-price"><del></del></span>
                            </div>
                            <div class="product-action-link">
                                <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                <a href="#" data-toggle="tooltip" title="Add to cart"><i class="ion-bag"></i></a>
                                <a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- related product area end -->

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
                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="ion-ios-shuffle"></i></a>
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
@endsection
