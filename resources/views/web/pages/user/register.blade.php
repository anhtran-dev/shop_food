@extends('web.layout.index')
@section('content')

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h2>Đăng kí</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Đăng kí</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- login register wrapper start -->
    <div class="login-register-wrapper pt-60 pb-60">
        <div class="container">
            <div class="member-area-from-wrap">

                <!-- Register Content Start -->
                <div class="col-lg-12">
                    <div class="wp-user">
                        <div class="login-reg-form-wrap mt-md-60 mt-sm-60 ">
                            <h2>Thông tin đăng kí</h2>
                            <form action="#" method="post">
                                <div class="single-input-item">
                                    <input type="text" placeholder="Full Name" required />
                                </div>
                                <div class="single-input-item">
                                    <input type="email" placeholder="Enter your Email" required />
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="password" placeholder="Enter your Password" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="password" placeholder="Repeat your Password" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button class="btn btn__bg btn__sqr">Đăng kí</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- Register Content End -->

            </div>
        </div>
    </div>


@endsection
