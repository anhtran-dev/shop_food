@extends('web.layout.index')
@section('content')
    <!-- hero slider area start -->
    @include('web.section.slider.slider')
    <!-- hero slider area start -->

    <!-- banner statistic area start -->
    @include('web.section.banner.banner')
    <!-- banner statistic area end -->

    <!-- daily deals area start -->
    @include('web.section.daily_deals.daily_deals')
    <!-- daily deals area end -->

    <!-- popular category start -->
    @include('web.section.popular_category.popular_category')
    <!-- popular category end -->

    <!-- product tab area start -->
    @include('web.section.tab_product.tab_product')
    <!-- product tab area end -->

    <!-- testimonial area start -->
    @include('web.section.testimonial.testimonial')
    <!-- testimonial area end -->

    <!-- best sellers area start -->
    @include('web.section.best_sellers.best_sellers')
    <!-- best sellers area end -->

    <!-- latest news area start -->
    @include('web.section.news.news')
    <!-- latest news area end -->


@endsection
