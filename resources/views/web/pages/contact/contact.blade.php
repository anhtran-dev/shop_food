@extends('web.layout.index')
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <nav aria-label="breadcrumb">
                        <h2>Liên hệ</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">liên hệ</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- contact area start -->
<div class="contact-area">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="contact-message pt-56 pb-60">
                    <h2>Liên hệ với chúng tôi</h2>
                    <form id="contact-form" action="https://demo.hasthemes.com/selena-preview/selena/assets/php/mail.php" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="name" placeholder="Họ tên *" type="text" >
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="phone" placeholder="Điện thoại *" type="text" >
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="email" placeholder="Email *" type="text" >
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="subject" placeholder="Chủ đề *" type="text">
                            </div>
                            <div class="col-12">
                                <div class="contact2-textarea text-center">
                                        <textarea placeholder="Tin nhắn *" name="message" class="form-control2"></textarea>
                                </div>
                                <div class="contact-btn">
                                    <button class="btn btn__bg btn__sqr" type="submit">Gửi tin nhắn</button>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-info bg-gray pt-56 pb-md-46 mb-sm-24">
                    <h2>Thông tin</h2>
                    <ul>
                        <li><i class="fa fa-fax"></i> Địa chỉ : 417 Quang Trung, Phường 10, Gò Vấp, Hồ Chí Minh</li>
                        <li><i class="fa fa-phone"></i> info@yourdomain.com</li>
                        <li><i class="fa fa-envelope-o"></i> +88013245657</li>
                    </ul>
                    <div class="working-time">
                        <h3>Thời gian làm việc</h3>
                        <p><span>Thứ 2 – Thứ 7:</span>08AM – 22PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->

<!-- map area start -->
<div class="map-area-wrapper">
    <div id="map_content" data-lat="10.831239" data-lng="106.668748" data-zoom="8" data-maptitle="Shop"
         data-mapaddress="417 Quang Trung, Phường 10, Gò Vấp, Hồ Chí Minh">
    </div>
</div>



@endsection
