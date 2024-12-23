@extends('master')
@section('content')

<style>

    .col-sm-3 {
        flex: 0 0 25%;
        max-width: 25%;
        box-sizing: border-box;
        padding: 10px;
    }

    .single-item {
        background: beige;
        border: 1px solid #ddd;
        padding: 15px; height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -10px; /* Loại bỏ khoảng cách giữa các cột */
    justify-content: flex-start; /* Căn chỉnh đều bắt đầu từ trái */
}

/* Cột sản phẩm */
.col-sm-3 {
    flex: 0 0 25%; /* Chiếm 25% chiều rộng */
    max-width: 25%;
    padding: 10px; /* Khoảng cách giữa các cột */
    box-sizing: border-box;
}

/* Chỉnh hàng cuối cùng (trường hợp ít hơn 4 sản phẩm) */
.row > .col-sm-3:last-child:nth-child(3),
.row > .col-sm-3:last-child:nth-child(2) {
    margin-right: auto; /* Đẩy các phần tử cuối cùng lùi sang trái */
}

/* Sản phẩm */
.single-item {
    background: beige;
    border: 1px solid #ddd;
    padding: 15px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: relative;
}

/* Hình ảnh sản phẩm */
.product-image {
    width: 100%;
    height: auto;
    object-fit: contain; /* Đảm bảo hình ảnh không bị méo */
};

</style>
<div class="inner-header">
    <div class="container">
        {{-- <div class="pull-left">
            <h6 class="inner-title" style="color:brown">Sản phẩm {{ $sanpham->id }} </h6>
        </div> --}}
        {{-- <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{ route('trang-chu') }}">Trang chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
            </div>
        </div> --}}
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-12">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="source/image/product/{{ $sanpham->image }}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title"><h2 style="color:brown;"><b>{{ $sanpham->name }}</b></h2></p>
                            <br/>
                            <p class="single-item-price">
                                @if($sanpham->promotion_price == 0)
                                <span><b>{{ number_format($sanpham->unit_price) }} đồng</b></span>
                            @else
                                @if($sanpham->unit_price == $sanpham->promotion_price)
                                <span class="flash-sale"><b>{{ number_format($sanpham->unit_price) }} đồng</b></span>
                                @else
                                <span class="flash-del"><b>{{ number_format($sanpham->unit_price) }} đồng</b></span>
                                <span class="flash-sale"><b>{{ number_format($sanpham->promotion_price) }} đồng</b></span>
                                @endif
                            @endif
                            </p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        {{-- <div class="single-item-desc">
                            <p style="color:brown;">{{ $sanpham->description }}</p>
                        </div> --}}
                        <div class="space20">&nbsp;</div>


                        <div class="single-item-options">
                            <select class="wc-select" name="color" style="color:brown;">
                                <option ><b>Số lượng</b></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <a class="add-to-cart" href="{{ route('dathang') }}" style="background-color: rgba(255, 99, 71, 0.6);"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description" style="color:brown;"><b>Mô tả</b></a></li>
                        {{-- <li><a href="#tab-reviews">Reviews (0)</a></li> --}}
                    </ul>

                    <div class="panel" id="tab-description">
                        <p style="color:brown;"><b>{{ $sanpham->description }}</b></p>

                    </div>
                    {{-- <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div> --}}
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h1 style="color:brown; font-family:Arial, Helvetica, sans-serif"><b>Sản phẩm tương tự</b></h1>
                    <br/>

                    <div class="row">
                        @foreach($sanpham_tuongtu as $sptt)
                        <div class="col-sm-3">
                            <div class="single-item">
                                @if($sptt->promotion_price != 0)
                                @if($sptt->unit_price != $sptt->promotion_price)

                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                                @endif
                            @endif
                                <div class="single-item-header">
                                    <a href=""><img src="source/image/product/{{ $sptt->image }}" alt="" height="150px"></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title" style="color:brown;"><b>{{ $sptt->name }}</b></p>
                                    <p class="single-item-price" style="font-size: 18px">
                                    @if($sptt->promotion_price == 0)
                                        <span><b>{{ number_format($sptt->unit_price) }} đồng</b></span>
                                    @else
                                        @if($sptt->unit_price == $sptt->promotion_price)
                                        <span class="flash-sale"><b>{{ number_format($sptt->unit_price) }} đồng</b></span>
                                        @else
                                        <span class="flash-del"><b>{{ number_format($sptt->unit_price) }} đồng</b></span>
                                        <span class="flash-sale"><b>{{ number_format($sptt->promotion_price) }} đồng</b></span>
                                        @endif
                                    @endif
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="{{ route('themgiohang', $sptt->id) }}" style="background-color: rgba(255, 99, 71, 0.6);"><i class="fa fa-shopping-cart" ></i></a>
                                    <a class="beta-btn primary" href="{{ route('chitietsanpham', ['id' => $sptt->id]) }}" style="border: 1px solid rgba(255, 99, 71, 0.6); color:brown"><b>Chi tiết</b><i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <div class="row">{{ $sanpham_tuongtu->links("pagination::bootstrap-4") }}</div>
                </div> <!-- .beta-products-list -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
