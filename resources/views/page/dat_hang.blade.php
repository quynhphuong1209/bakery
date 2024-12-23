@extends('master')
@section('content')
<div class="inner-header">
    {{-- <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đặt hàng</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ</a> / <span>Đặt hàng</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div> --}}
</div>

<div class="container">
    <div id="content">

        <form action="{{ route('dathang') }}" method="post" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="col-sm-6">
                    <h1 style="color:brown; font-family:Arial, Helvetica, sans-serif"><b>Thông tin khách hàng</b></h1>
                    <div class="space20">&nbsp;</div>

                    <div class="form-block">
                        <label style="color:brown"><b>Họ tên*</b></label>
                        <input type="text" id="name" name="name" required placeholder="Nhập họ tên">
                    </div>

                    <div class="form-block">
                        <label style="color:brown"><b>Giới tính</b></label>
                        <input type="radio" id="gender" class="input-radio" name="gender" value="nam" checked="checked"
                         style="width:10%"><span style="margin-right: 10%">Nam</span>

                         <input type="radio" id="gender" class="input-radio" name="gender" value="nữ"
                         style="width:10%"><span style="margin-right: 10%">Nữ</span>
                    </div>


                    <div class="form-block">
                        <label for="email" style="color:brown"><b>Email*</b></label>
                        <input type="email" name="email" required placeholder="example@gmail.com">
                    </div>


                    <div class="form-block" style="color:brown">
                        <label for="address" style="color:brown"><b>Địa chỉ*</b></label>
                        <input type="text" id="address" name ="address" placeholder="Địa chỉ đường phố" required>
                    </div>

                    <div class="form-block" style="color:brown">
                        <label for="phone" style="color:brown"><b>Điện thoại*</b></label>
                        <input type="text" name="phone" required>
                    </div>

                    <div class="form-block" style="color:brown">
                        <label for="notes" style="color:brown"><b>Ghi chú</b></label>
                        <textarea name="notes"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head" ><h5 style="color:brown; font-family:Arial, Helvetica, sans-serif "><b>Đơn hàng của bạn</b></h5></div>
                        <div class="your-order-body">
                            <div class="your-order-item">
                                <div>
                                @if(Session::has('cart'))
                                @foreach($product_cart as $cart)
                                <!--  one item	 -->
                                    <div class="media">
                                        <img width="35%" src="source/image/product/{{ $cart['items']['image'] }}" alt="" class="pull-left">
                                        <div class="media-body">
                                            <p class="font-large">{{( $cart['items']['name'] )}}</p>
                                            <span class="color-gray your-order-info" style="color:brown">Số lượng: {{ $cart['qty'] }}</span>
                                            <span class="color-gray your-order-info" style="color:brown">Đơn giá:{{number_format( $cart['price']/$cart['qty'] )}} đồng</span>
                                        </div>
                                    </div>
                                @endforeach
                                @endif
                                <!-- end one item -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="your-order-item">
                                <div class="pull-left"><p class="your-order-f18" style="color:brown"><b>Tổng tiền:</b></p></div>
                                <div class="pull-right"><h5 style="color:brown">@if(Session::has('cart')){{number_format($totalPrice )}}
                                    @else 0 @endif đồng</h5></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="your-order-head"><h5 style="color:brown; font-family:Arial, Helvetica, sans-serif">Hình thức thanh toán</h5></div>

                        <div class="your-order-body">
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment" value="COD"
                                    checked="checked" data-order_button_text="">
                                    <label for="payment_method_bacs" style="color:brown"><b>Thanh toán trực tiếp</b></label>
                                    <div class="payment_box payment_method_bacs" style="display: block;color:brown">
                                      <b>Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng</b>
                                    </div>
                                </li>

                                <li class="payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment" value="ATM"
                                    data-order_button_text="">
                                    <label for="payment_method_cheque" style="color:brown"><b>Chuyển khoản</b></label>
                                    <div class="payment_box payment_method_cheque" style="display: block; color:brown">
                                        <b>Chủ tài khoản:A
                                            <br>STK:012345556
                                            <br>........
                                        </b>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="text-center"><button type="submit" a class="beta-btn primary" href="#" style="background-color: rgba(255, 99, 71, 0.6); border: 1px solid rgba(255, 99, 71, 0.6)">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
                    </div> <!-- .your-order -->
                </div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
