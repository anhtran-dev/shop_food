<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/selena-preview/selena/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Apr 2020 04:35:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>Selena - Organic eCommerce Bootstrap 4 Template</title>
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon" />
    <!--=== All Plugins CSS ===-->
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="{{asset('assets/css/vendor.css')}}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
{{--    custom style--}}
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

</head>

<body>

<!-- Start Header Area -->
    @include('web.layout.header')
<!-- end Header Area -->

<!-- main wrapper start -->
<main>
    @yield('content')
</main>
<!-- main wrapper end -->

<!--== Start Footer Area Wrapper ==-->
    @include('web.layout.footer')
<!--== End Footer Area Wrapper ==-->

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->

<!--=======================Javascript============================-->
<!--=== All Vendor Js ===-->
<script src="{{asset('assets/js/vendor.js')}}"></script>
<!--=== All Plugins Js ===-->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!--=== Active Js ===-->
<script src="{{asset('assets/js/active.js')}}"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/selena-preview/selena/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Apr 2020 04:35:04 GMT -->
</html>
