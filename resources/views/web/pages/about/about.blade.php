@extends('web.layout.index')
@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h2>Về chúng tôi</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">về chúng tôi</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- about wrapper start -->
    <div class="about-us-wrapper pt-60 pb-60 pb-lg-56 pt-sm-58">
        <div class="container">
            <div class="row">
                <!-- About Text Start -->
                <div class="col-xl-6 col-lg-6">
                    <div class="about-text-wrap">
                        <h2><span>Cung cấp tốt nhất</span>sản phẩm từ mỹ dành cho bạn</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur dignissimos id illum obcaecati perferendis quisquam sed similique tenetur veritatis!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur dignissimos id illum obcaecati perferendis quisquam sed similique tenetur veritatis!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur dignissimos id illum obcaecati perferendis quisquam sed similique tenetur veritatis!</p>
                    </div>
                </div>
                <!-- About Text End -->
                <!-- About Image Start -->
                <div class="col-xl-5 col-lg-6 ml-auto">
                    <div class="about-image-wrap">
                        <img src="{{asset('assets/img/about/about.jpg')}}" alt="About" />
                    </div>
                </div>
                <!-- About Image End -->
            </div>
        </div>
    </div>
    <!-- about wrapper end -->

    <!-- team area start -->
    <div class="team-area bg-gray pt-60 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Đội ngũ chúng tôi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member mb-30">
                        <div class="team-thumb img-full">
                            <img src="{{asset('assets/img/team/team_member_1.jpg')}}" alt="">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h3>Yasua</h3>
                            <h6>CEO</h6>
                            <p>Summorift</p>
                        </div>
                    </div>
                </div> <!-- end single team member -->

            </div>
        </div>
    </div>
    <!-- team area end -->

    <!-- choosing area start -->
    <div class="choosing-area pt-60 pb-56 pb-md-24 pb-sm-24">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Tại sao chọn chúng tôi ?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-choose-item text-center mb-md-30 mb-sm-30">
                        <i class="fa fa-cube"></i>
                        <h4>Sản phẩm chất lượng</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, optio?</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-choose-item text-center mb-md-30 mb-sm-30">
                        <i class="fa fa-plane"></i>
                        <h4>Vận chuyển nhanh chóng</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, magnam!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-choose-item text-center mb-md-30 mb-sm-30">
                        <i class="fa fa-comments"></i>
                        <h4>Hỗ trợ nhiệt tình</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, vel?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

