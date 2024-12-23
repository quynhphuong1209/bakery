@extends('master')
@section('content')
{{-- <div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Giới thiệu</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Giới thiệu</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div> --}}
{{-- <div class="container">
    <div id="content">
        <div class="our-history">
            <h2 class="text-center wow fadeInDown">Our History</h2>
            <div class="space35">&nbsp;</div>

            <div class="history-slider">
                <div class="history-navigation">
                    <a data-slide-index="0" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2003</span></a>
                    <a data-slide-index="1" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2004</span></a>
                    <a data-slide-index="2" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2005</span></a>
                    <a data-slide-index="3" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2007</span></a>
                    <a data-slide-index="4" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2009</span></a>
                    <a data-slide-index="5" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2011</span></a>
                    <a data-slide-index="6" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2014</span></a>
                </div>

                <div class="history-slides">
                    <div>
                        <div class="row">
                        <div class="col-sm-5">
                            <img src="assets/dest/images/history.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h5 class="other-title">Birth.</h5>
                            <p>
                                Suite 127 / 267 – 277 Brussel St,<br />
                                62 Croydon, NYC<br />
                                New York
                            </p>
                            <div class="space20">&nbsp;</div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
                        </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                        <div class="col-sm-5">
                            <img src="assets/dest/images/history.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h5 class="other-title">Web Design</h5>
                            <p>
                                Suite 127 / 267 – 277 Brussel St,<br />
                                62 Croydon, NYC<br />
                                New York
                            </p>
                            <div class="space20">&nbsp;</div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
                        </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                        <div class="col-sm-5">
                            <img src="assets/dest/images/history.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h5 class="other-title">Web Development</h5>
                            <p>
                                Suite 127 / 267 – 277 Brussel St,<br />
                                62 Croydon, NYC<br />
                                New York
                            </p>
                            <div class="space20">&nbsp;</div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
                        </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                        <div class="col-sm-5">
                            <img src="assets/dest/images/history.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h5 class="other-title">Photoshop</h5>
                            <p>
                                Suite 127 / 267 – 277 Brussel St,<br />
                                62 Croydon, NYC<br />
                                New York
                            </p>
                            <div class="space20">&nbsp;</div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
                        </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                        <div class="col-sm-5">
                            <img src="assets/dest/images/history.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h5 class="other-title">Skill</h5>
                            <p>
                                Suite 127 / 267 – 277 Brussel St,<br />
                                62 Croydon, NYC<br />
                                New York
                            </p>
                            <div class="space20">&nbsp;</div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
                        </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                        <div class="col-sm-5">
                            <img src="assets/dest/images/history.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h5 class="other-title">Project.</h5>
                            <p>
                                Suite 127 / 267 – 277 Brussel St,<br />
                                62 Croydon, NYC<br />
                                New York
                            </p>
                            <div class="space20">&nbsp;</div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
                        </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                        <div class="col-sm-5">
                            <img src="assets/dest/images/history.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h5 class="other-title">Coffe</h5>
                            <p>
                                Suite 127 / 267 – 277 Brussel St,<br />
                                62 Croydon, NYC<br />
                                New York
                            </p>
                            <div class="space20">&nbsp;</div>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space50">&nbsp;</div>
        <hr />
        <div class="space50">&nbsp;</div>
        <h2 class="text-center wow fadeInDown">Our Passion for What We Do Transfers Into Our Services</h2>
        <div class="space20">&nbsp;</div>
        <p class="text-center wow fadeInLeft">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br /> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        <div class="space35">&nbsp;</div>

        <div class="row">
            <div class="col-sm-2 col-sm-push-2">
                <div class="beta-counter">
                    <p class="beta-counter-icon"><i class="fa fa-user"></i></p>
                    <p class="beta-counter-value timer numbers" data-to="19855" data-speed="2000">19855</p>
                    <p class="beta-counter-title">Clients Satisfied</p>
                </div>
            </div>

            <div class="col-sm-2 col-sm-push-2">
                <div class="beta-counter">
                    <p class="beta-counter-icon"><i class="fa fa-picture-o"></i></p>
                    <p class="beta-counter-value timer numbers" data-to="3568" data-speed="2000">3568</p>
                    <p class="beta-counter-title">Amazing Works</p>
                </div>
            </div>

            <div class="col-sm-2 col-sm-push-2">
                <div class="beta-counter">
                    <p class="beta-counter-icon"><i class="fa fa-clock-o"></i></p>
                    <p class="beta-counter-value timer numbers" data-to="258934" data-speed="2000">258934</p>
                    <p class="beta-counter-title">Support Hours</p>
                </div>
            </div>

            <div class="col-sm-2 col-sm-push-2">
                <div class="beta-counter">
                    <p class="beta-counter-icon"><i class="fa fa-pencil"></i></p>
                    <p class="beta-counter-value timer numbers" data-to="150" data-speed="2000">150</p>
                    <p class="beta-counter-title">New Projects</p>
                </div>
            </div>
        </div> <!-- .beta-counter block end -->

        <div class="space50">&nbsp;</div>
        <hr />
        <div class="space50">&nbsp;</div>

        <h2 class="text-center wow fadeInDownwow fadeInDown">Our Amaizing Team</h2>
        <div class="space20">&nbsp;</div>
        <h5 class="text-center other-title wow fadeInLeft">Founders</h5>
        <p class="text-center wow fadeInRight">Nemo enims voluptatem quia volupas sit aspe aut odit aut fugit, sed quia <br />consequuntur magni dolores.</p>
        <div class="space20">&nbsp;</div>
        <div class="row">
            <div class="col-sm-6 wow fadeInLeft">
                <div class="beta-person media">

                    <img class="pull-left" src="assets/dest/images/person2.jpg" alt="">

                    <div class="media-body beta-person-body">
                        <h5>Bob Robertson</h5>
                        <p class="font-large">Founder</p>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit asatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque por quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
                        <a href="single_type_gallery.html">View projects <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 wow fadeInRight">
                <div class="beta-person media ">

                    <img class="pull-left" src="assets/dest/images/person3.jpg" alt="">

                    <div class="media-body beta-person-body">
                        <h5>Mike Greenwood</h5>
                        <p class="font-large">Founder</p>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit asatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque por quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
                        <a href="single_type_gallery.html">View projects <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="space60">&nbsp;</div>
        <h5 class="text-center other-title wow fadeInDown">The Best of Professionals</h5>
        <p class="text-center wow fadeInUp">Nemo enims voluptatem quia volupas sit aspe aut odit aut fugit, sed quia <br />consequuntur magni dolores.</p>
        <div class="space20">&nbsp;</div>
        <div class="row">
            <div class="col-sm-3">
                <div class="beta-person beta-person-full">
            <div class="bets-img-hover">
                    <img src="assets/dest/images/person1.jpg" alt="">
            </div>
                    <div class="beta-person-body">
                        <h5>Mark Priston</h5>
                        <p class="font-large">Web developer</p>
                        <p>Nemo enims voluptatem quia volupas sit aspe aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                        <a href="single_type_gallery.html">View projects <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="beta-person beta-person-full">
                <div class="bets-img-hover">
                    <img src="assets/dest/images/person2.jpg" alt="">
                </div>
                    <div class="beta-person-body">
                        <h5>Bob Robertson</h5>
                        <p class="font-large">Web developer</p>
                        <p>Nemo enims voluptatem quia volupas sit aspe aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                        <a href="single_type_gallery.html">View projects <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="beta-person beta-person-full">
                <div class="bets-img-hover">
                    <img src="assets/dest/images/person3.jpg" alt="">
                </div>
                    <div class="beta-person-body">
                        <h5>Mike Greenwood</h5>
                        <p class="font-large">Web developer</p>
                        <p>Nemo enims voluptatem quia volupas sit aspe aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                        <a href="single_type_gallery.html">View projects <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="beta-person beta-person-full">
                <div class="bets-img-hover">
                    <img src="assets/dest/images/person4.jpg" alt="">
                </div>
                    <div class="beta-person-body">
                        <h5>David Black</h5>
                        <p class="font-large">Web developer</p>
                        <p>Nemo enims voluptatem quia volupas sit aspe aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                        <a href="single_type_gallery.html">View projects <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container --> --}}

<style>
/* Ứng dụng hình nền */

.container-fluid{
    margin:0;
    padding:0;
}
.col-md-12 {
            background-image: url('source/image/product/teddybakery.jpg');
            background-size: cover; /* Đảm bảo hình ảnh bao phủ đầy đủ */
            background-position: center; /* Căn giữa hình ảnh */
            background-repeat: no-repeat; /* Không lặp lại hình ảnh */
            height: 100%; /* Chiều cao đầy đủ trong container */
        }

        /* Nội dung có nền mờ để dễ đọc */
        .content {
    background-color: rgba(255, 255, 255, 0.8); /* Làm mờ nền */
    padding: 20px;
    margin: 20px 50px; /* Thay đổi khoảng cách lề (trái/phải nhiều hơn) */
    max-width: 1200px; /* Tăng chiều rộng tối đa */
    border-radius: 10px; /* Bo góc mềm mại */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Thêm bóng nhẹ */
}


        h2, h3 {
            text-align: left;
            color: #444;
            font-family:'Times New Roman', Times, serif;
        }

        p {
            line-height: 1.6;
            font-family:'Times New Roman', Times, serif;
            font-size: 16px;
        }

</style>


<div class="container-fluid">

    {{-- <div class="col-sm-3">
        <div class="box_image visible-lg visible-md">
            <div class="banner">
                <a href="/">
                    <img src="source/image/product/teddybakery.jpg" alt="">
                </a>
            </div>
        </div>
    </div> --}}

    <div class="col-md-12">
    <div class="content">
        <h2>Giới thiệu về Sweet Street Bakery</h2>
        <br/>
        <p>Tại Sweet Street Bakery, chúng tôi tự hào là một tiệm bánh nổi tiếng với những chiếc bánh ngọt ngon nhất, được làm từ những nguyên liệu tươi ngon và chất lượng cao. Từ những ngày đầu thành lập, chúng tôi đã không ngừng phát triển và mở rộng để trở thành một thương hiệu được yêu thích và tin cậy trong lòng khách hàng.</p>
        <br/>
        <h3>Lịch sử hình thành và phát triển</h3>
        <br/>
        <p>Sweet Street Bakery bắt đầu từ một tiệm bánh nhỏ với những chiếc bánh ngọt thủ công. Với sự đam mê và tận tâm của đội ngũ nhân viên, chúng tôi đã nhanh chóng thu hút được sự chú ý của khách hàng và cộng đồng. Nhờ vào sự ủng hộ và yêu mến của mọi người, chúng tôi đã mở rộng quy mô và phát triển thành một chuỗi tiệm bánh nổi tiếng, mang lại niềm vui và hương vị tuyệt vời cho hàng ngàn khách hàng.</p>
        <br/>
        <h3>Sản phẩm và Dịch vụ</h3>
        <br/>
        <p>Tại Sweet Street Bakery, chúng tôi cung cấp một loạt các sản phẩm đa dạng, từ những chiếc bánh kem mềm mịn, bánh mousse tinh tế đến những chiếc bánh tart giòn tan. Mỗi sản phẩm của chúng tôi đều được chế biến thủ công với tình yêu và sự tận tâm, nhằm mang đến cho khách hàng những trải nghiệm ẩm thực tuyệt vời nhất.</p>
        <ul style="font-family:'Times New Roman', Times, serif; font-size:16px;">
            <li><strong>Bánh ngọt:</strong> <b>Chúng tôi tự hào về những chiếc bánh ngọt được trang trí đẹp mắt và hương vị tuyệt hảo, thích hợp cho mọi dịp lễ kỷ niệm, sinh nhật hay tiệc tùng.</b> </li>
            <li><strong>Bánh mì:</strong> <b>Những chiếc bánh mì của chúng tôi luôn mềm mại, thơm ngon và đa dạng về hương vị, từ truyền thống đến hiện đại, đáp ứng nhu cầu và sở thích của mọi khách hàng.</b> </li>
        </ul>
        <br/>
        <h3>Không gian tại Sweet Street Bakery</h3>
        <br/>
        <p>Không gian của Sweet Street Bakery được thiết kế ấm cúng và thân thiện, mang đến cảm giác thoải mái và gần gũi cho khách hàng. Với ánh sáng tự nhiên, trang trí tinh tế và không gian mở, tiệm bánh của chúng tôi là nơi lý tưởng để bạn có thể thư giãn và thưởng thức bánh ngọt cùng bạn bè và gia đình.</p>
        <br/>
        <h3>Sứ mệnh và Tầm nhìn</h3>
        <br/>
        <p>Sứ mệnh của Sweet Street Bakery là mang lại niềm vui và sự hài lòng cho khách hàng thông qua những sản phẩm chất lượng cao và dịch vụ tận tâm. Chúng tôi luôn không ngừng nỗ lực để cải tiến và sáng tạo, nhằm mang đến những trải nghiệm ẩm thực độc đáo và tuyệt vời nhất cho khách hàng. Tầm nhìn của chúng tôi là trở thành một thương hiệu bánh ngọt hàng đầu, được biết đến và yêu thích không chỉ bởi chất lượng sản phẩm mà còn bởi sự tận tâm và thân thiện trong phục vụ.</p>
        <br/>
        <h3>Đội ngũ nhân viên</h3>
        <br/>
        <p>Đội ngũ nhân viên tại Sweet Street Bakery là những người thợ làm bánh tài năng và nhiệt huyết. Họ không chỉ có kỹ năng làm bánh xuất sắc mà còn luôn thân thiện và tận tâm với khách hàng. Sự kết hợp hoàn hảo giữa tay nghề và tinh thần phục vụ đã làm nên tên tuổi của Sweet Street Bakery, mang lại sự hài lòng và tin tưởng từ khách hàng.</p>
        <br/>
        <h3>Cam kết chất lượng</h3>
        <br/>
        <p>Chúng tôi cam kết sử dụng những nguyên liệu tươi ngon và chất lượng cao nhất để làm bánh. Mỗi chiếc bánh của Sweet Street Bakery đều được làm bằng tay với sự cẩn thận và chu đáo, đảm bảo mang đến cho khách hàng những sản phẩm ngon nhất. Chúng tôi luôn đặt chất lượng và sự hài lòng của khách hàng lên hàng đầu, và đó chính là lý do tại sao Sweet Street Bakery luôn được yêu thích và tin cậy.</p>
        <br/>
        <h3>Lời kết</h3>
        <br/>
        <p>Hãy đến và trải nghiệm tại Sweet Street Bakery – nơi mỗi chiếc bánh đều mang một câu chuyện ngọt ngào. Chúng tôi hân hạnh được phục vụ và mang đến những khoảnh khắc ngọt ngào và đáng nhớ cho bạn và gia đình. Sweet Street Bakery luôn chào đón bạn với những sản phẩm tuyệt vời và sự phục vụ tận tâm.</p>
    </div>
</div>

</div>

@endsection
