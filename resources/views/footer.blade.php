<style>
.contact-info {
    color: white;
}

.email-address {
    margin-left: 10px; /* Khoảng cách giữa biểu tượng và địa chỉ email */
    display: block;
    margin-top: 5px; /* Khoảng cách giữa các địa chỉ email */

}

.fa-envelope {
    margin-right: 5px; /* Khoảng cách giữa các biểu tượng */
}


.phone-number {
    margin-left: 10px; /* Khoảng cách giữa biểu tượng và số điện thoại */
    display: block;
    margin-top: 5px; /* Khoảng cách giữa các số điện thoại */
}
</style>

<div id="footer" class="color-div" style="background-color:rgba(255, 99, 71, 0.6) !important ;">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title" style="color:white"><b>Liên kết</b></h4>
                    <div>
                        <ul>
                            <li><a href="{{ route('trang-chu') }}" style="color:white"><i class="fa fa-chevron-right" ></i><b>Trang chủ</b></a></li>
                            {{-- <li><a href="{{ route('loaisanpham') }}"><i class="fa fa-chevron-right"></i>Loại sản phẩm</a></li> --}}
                            <li><a href="{{ route('gioithieu') }}" style="color:white"><i class="fa fa-chevron-right"></i><b>Giới thiệu</b></a></li>
                            <li><a href="{{ route('lienhe') }}" style="color:white"><i class="fa fa-chevron-right"></i><b>Liên hệ</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
             <div class="col-sm-10">
                <div class="widget">
                    <h4 class="widget-title" style="color:white" ><b>Liên hệ</b></h4>
                    <div>
                        <div class="contact-info">
                            <i class="fa fa-map-marker"></i>
                            <h7 style="color:white"><b>Trường đại học Y tế Công cộng</b></h7>
                            <br/>
                            <a href=
                            "https://www.bing.com/maps?osid=d959a93a-4fb6-4f7f-84ba-5d50cdb75e1e&cp=21.082908~105.775691&lvl=17&pi=0&imgid=21af9db5-b0d3-4adc-8a26-e4f3975679b5&v=2&sV=2&form=S00027"
                            style="color:white"><b>Số 1A Đường Đức Thắng, Hà Nội </b></a>

                        </div>
                        <br/>
                        <div class="contact-info">
                            <i class="fa fa-phone"></i>
                            <span class="phone-number" style="color:white"><b>+84 382 665 916</b></span>
                            <span class="phone-number" style="color:white"><b>+84 915 568 367</b></span>
                            <span class="phone-number" style="color:white"><b>+84 973 445 255</b></span>
                        </div>

                        <br/>
                        <div class="contact-info">
                            <i class="fa fa-envelope"></i>
                            <span class="email-address" style="color:white"><b>2211090031@studenthuph.edu.vn</b> </span>
                            <i class="fa fa-envelope"></i>
                            <span class="email-address" style="color:white"><b>2211090027@studenthuph.edu.vn</b> </span>
                            <i class="fa fa-envelope"></i>
                            <span class="email-address" style="color:white"><b>2211090012@studenthuph.edu.vn</b> </span>
                        </div>


                    </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title" style="color:white"><b>Giới thiệu</b></h4>
                    <p style="color:white; font-family:Arial, Helvetica, sans-serif;">
                       <b>Sweet Street Bakery tự hào mang đến những chiếc bánh ngọt ngon nhất,
                        được làm từ nguyên liệu tươi ngon và chất lượng. Không gian ấm cúng và thân thiện,
                        lý tưởng cho những buổi họp mặt gia đình và bạn bè. Hãy đến và trải nghiệm nơi mà mỗi chiếc bánh đều mang một câu chuyện ngọt ngào!</b>
                    </p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title" style="color:white" ><b>Subscribe</b></h4>
                    <form action="#" method="post">
                        <input type="email" name="your_email" style="background-color: white; color: black; border: 1px solid #ccc;">
                        <button class="pull-right" type="submit" style="background-color: white; color: black; border: 1px solid #ccc;">Subscribe <i class="fa fa-chevron-right"></i></button>
                    </form>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #footer -->
<div class="copyright text-center" style="background-color:rgba(255, 71, 71, 0.6)" >
    <div class="container">
        <p class="" style="color:white">Privacy policy. (&copy;) 2024</p>
        {{-- <p class="pull-right pay-options">
            <a href="#"><img src="source/assets/dest/images/pay/master.jpg" alt="" /></a>
            <a href="#"><img src="source/assets/dest/images/pay/pay.jpg" alt="" /></a>
            <a href="#"><img src="source/assets/dest/images/pay/visa.jpg" alt="" /></a>
            <a href="#"><img src="source/assets/dest/images/pay/paypal.jpg" alt="" /></a>
        </p> --}}
        <div class="clearfix"></div>
    </div> <!-- .container -->
</div> <!-- .copyright -->
