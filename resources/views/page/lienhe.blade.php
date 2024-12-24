@extends('master')
@section('content')
<style>
    p {
        color:brown;
    }
</style>
{{-- <div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Contacts</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Contacts</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div> --}}
<div class="beta-map">

    <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3722.748300566273!2d105.77730138369225!3d21.08271280938842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1734591971426!5m2!1svi!2s"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>
<div class="container">
    <div id="content" class="space-top-none">

        <div class="space50">&nbsp;</div>
        <div class="row">
            <div class="col-sm-8">
                <h2 style="color:brown; font-family:Arial, Helvetica, sans-serif;"><b>Thông tin phản hồi khách hàng</b></h2>
                <div class="space20">&nbsp;</div>
                <p><b>Chúng tôi rất mong nhận được phản hồi từ bạn để cải thiện dịch vụ và sản phẩm của mình. Vui lòng điền thông tin vào biểu mẫu dưới đây: </b></p>
                <div class="space20">&nbsp;</div>
                <form action="/feedback" method="post" class="contact-form">
                    <div class="form-block">
                        <input name="your-name" type="text" placeholder="Tên của bạn (bắt buộc)" required>
                    </div>
                    <div class="form-block">
                        <input name="your-email" type="email" placeholder="Email của bạn (bắt buộc)" required>
                    </div>
                    {{-- <div class="form-block">
                        <input name="your-subject" type="text" placeholder="Subject">
                    </div> --}}
                    <div class="form-block">
                        <textarea name="your-message" placeholder="Phản hồi của bạn" required></textarea>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="beta-btn primary" style="color:brown; border: 1px solid rgba(255, 99, 71, 0.6);"><b>Gửi phản hồi</b><i class="fa fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h2 style="color:brown; font-family:Arial, Helvetica, sans-serif"><b>Thông tin liên hệ</b></h2>
                <div class="space20">&nbsp;</div>

                <h6 class="contact-title" style="color:brown;"><b>Địa chỉ</b></h6>
                <p>
                    <b>Số 1A Đường Đức Thắng</b><br>
                    <b>Hà Nội</b>
                </p>
                <div class="space20">&nbsp;</div>

                <h6 class="contact-title" style="color:brown;"><b>Email</b></h6>
                <p>
                    <br/>
                    <a href="2211090012@studenthuph.edu.vn" style="color:brown;"><b>2211090012@studenthuph.edu.vn</b></a>
                    <a href="2211090027@studenthuph.edu.vn" style="color:brown;"><b>2211090027@studenthuph.edu.vn</b></a>
                    <a href="2211090031@studenthuph.edu.vn" style="color:brown;"><b>2211090031@studenthuph.edu.vn</b></a>
                </p>
                <div class="space20">&nbsp;</div>
                <h6 class="contact-title" style="color:brown;"><b>Thàmh viên trong nhóm</b></h6>
                <p>
                    <b>Dương Mai Thu Hiền</b> <br>
                    <b>Nguyễn Thị Thanh Nga </b><br>
                    <b>Đinh Lê Quỳnh Phương</b>

                </p>
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
