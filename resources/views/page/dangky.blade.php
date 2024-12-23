@extends('master')
@section('content')
<div class="inner-header">
    {{-- <div class="container">
        <div class="pull-left">
            <h1 class="inner-title">Đăng ký</h1>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{ route('trang-chu') }}">Trang chủ</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div> --}}
</div>

<div class="container">
    <div id="content">

        <form action="{{ route('signup') }}" method="post" class="beta-form-checkout">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-sm-3"></div>
                @if(count($errors)>0)
                   <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{ $err }}
                    @endforeach
                   </div>
                @endif
                @if(Session::has('thanhcong'))
                   <div class="alert alert-success">{{ Session::get('thanhcong') }}</div>
                @endif
                <div class="col-sm-6">
                    <h1 style="text-align: center; color:brown;  font-family:Arial, Helvetica, sans-serif"><b>Đăng ký</b></h1>
                    <div class="space20">&nbsp;</div>

                    <div class="space20">&nbsp;</div>


                    <div class="form-block">
                        <label for="email" style="color:brown"><b>Địa chỉ email*</b></label>
                        <input type="email" name="email" required>
                    </div>

                    <div class="form-block">
                        <label for="your_last_name" style="color:brown"><b>Họ và tên*</b></label>
                        <input type="text" name="fullname" required>
                    </div>

                    <div class="form-block">
                        <label for="address" style="color:brown"><b>Địa chỉ*</b></label>
                        <input type="text" name="address" required>
                    </div>


                    <div class="form-block">
                        <label for="phone" style="color:brown"><b>Số điện thoại*</b></label>
                        <input type="phone" name="phone" required>
                    </div>
                    <div class="form-block">
                        <label for="password" style="color:brown"><b>Mật khẩu*</b></label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="form-block">
                        <label for="password" style="color:brown"><b>Nhập lại mật khẩu*</b></label>
                        <input type="password" name="re_password" required>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary" style="background-color:rgba(255, 99, 70, 0.6); border: 1px solid rgba(255, 99, 71, 0.6); margin-right: 10px;" >Đăng ký</button> &nbsp
                        <button type="button" class="btn btn-primary btn-primary-custom" onclick="window.location.href='{{ route('trang-chu') }}'" style="margin-left: 10px; background-color:rgba(255, 99, 70, 0.6); border: 1px solid rgba(255, 99, 71, 0.6)">Trang chủ</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
