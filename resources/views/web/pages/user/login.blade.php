@extends('web.layout.index')
@section('content')

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h2>Đăng nhập</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
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
                <!-- Login Content Start -->
                <div class="col-lg-12" >
                    <div class="wp-user">
                        <div class="login-reg-form-wrap  pr-lg-50">
                            <h2>Đăng nhập</h2>
                            <form action="#" method="post">
                                <div class="single-input-item">
                                    <input type="email" placeholder="Email" required />
                                </div>
                                <div class="single-input-item">
                                    <input type="password" placeholder="Mật khẩu" required />
                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <a href="#" class="forget-pwd">Quên mật khẩu?</a>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button class="btn btn__bg btn__sqr">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- Login Content End -->
            </div>
        </div>
    </div>


@endsection
