<div id="header" style="background-color:beige;">
    <div class="header-top" style="background-color:rgba(255, 99, 71, 0.6);">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href="https://www.bing.com/maps?osid=d959a93a-4fb6-4f7f-84ba-5d50cdb75e1e&cp=21.082908~105.775691&lvl=17&pi=0&imgid=21af9db5-b0d3-4adc-8a26-e4f3975679b5&v=2&sV=2&form=S00027" style="color:white">
                        <i class="fa fa-home" style="color:white"></i><b>Số 1A Đường Đức Thắng, Hà Nội</b></a></li>
                    <li><a href="" style="color:white"><i class="fa fa-phone" style="color:white"></i><b>+84 382 665 916</b> </a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                @if(Auth::check())
                    <li><a href="" style="color:white"><b>Chào bạn {{ Auth::user()->full_name }}</b></a></li>
                    <li><a href="{{ route('logout') }}" style="color:white"><b>Đăng xuất</b></a></li>
                @else
                    <li><a href="{{ route('signup') }}" style="color:white"><b>Đăng ký</b></a></li>
                    <li><a href="{{ route('login') }}" style="color:white"><b>Đăng nhập</b></a></li>
                @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="{{ route('trang-chu') }}"  id="logo"><img src="source/assets/dest/images/sweet-bakery-logo.png" width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="{{ route('search') }}">
                        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit" style="color:brown;"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="cart">
                        <div class="beta-select" style="color:brown">
                            <i class="fa fa-shopping-cart" style="color:brown"></i>
                            <b>Giỏ hàng </b><b>(@if(Session::has('cart')){{ Session::get('cart')->totalQty }}@else Trống </b> @endif)
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="beta-dropdown cart-body">
                            @if(Session::has('cart'))
                                @foreach($product_cart as $product)
                                    <div class="cart-item">
                                        <a class="cart-item-delete" href="{{ route('xoagiohang', $product['items']['id'] ) }}">
                                            <i class="fa fa-times"></i>
                                        </a>
                                        <div class="media">
                                            <a class="pull-left" href="#"><img src="source/image/product/{{ $product['items']['image'] }}" alt=""></a>
                                            <div class="media-body">
                                                <span class="cart-item-title"><b>{{ $product['items']['name'] }}</b></span>
                                                <span class="cart-item-amount"><b>{{ $product['qty'] }}*</b><span>
                                                    @if($product['items']['promotion_price'] == 0)
                                                      <b>{{ number_format($product['items']['unit_price']) }}</b>
                                                    @else
                                                       <b>{{ number_format($product['items']['promotion_price']) }}</b>
                                                    @endif
                                                </span></span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="cart-caption">
                                    <div class="cart-total text-right">
                                        Tổng tiền: <span class="cart-total-value">{{ number_format(Session::get('cart')->totalPrice) }} đồng</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="center">
                                        <div class="space10">&nbsp;</div>
                                        <a href="{{ route('dathang') }}" class="beta-btn primary text-center" style="border: 1px solid rgba(255, 99, 71, 0.6); color:brown">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            @else
                                <div class="cart-caption">
                                    <div class="cart-total text-right">
                                      <b>Tổng tiền: <span class="cart-total-value">0 đồng</b>  </span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="center">
                                        <div class="space10">&nbsp;</div>
                                        <a href="{{ route('dathang') }}" class="beta-btn primary text-center" style="border: 1px solid rgba(255, 99, 71, 0.6); color:brown"><b>Đặt hàng </b><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div> <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color:rgba(255, 99, 71, 0.6)" >
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'></span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{ route('trang-chu') }}"><b>Trang chủ</b></a></li>
                    <li><a href=""><b>Loại sản phẩm</b></a>
                        <ul class="sub-menu">
                            @foreach($loai_sanpham as $loai)
                            <li><a href="{{ route('loaisanpham',$loai->id)}}" ><b style="color:brown">{{ $loai->name }}</b></a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('gioithieu') }}"><b>Giới thiệu</b></a></li>
                    <li><a href="{{ route('lienhe')}}"><b>Liên hệ</b></a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->




