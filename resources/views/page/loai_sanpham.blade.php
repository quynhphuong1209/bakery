@extends('master')
@section('content')

<style>
    .beta-products-list .row {
        display: flex;
        flex-wrap: wrap;
    }

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
    };

</style>

<div class="inner-header">
    <div class="container">
        {{-- <div class="pull-left">
            <h1 class="inner-title" style="color:brown;">{{ $loai_sanpham->name }} </h1>
        </div> --}}
        {{-- <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{ route('trang-chu') }}">Trang chủ</a> / <span>Sản phẩm</span>
            </div>
        </div> --}}
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    {{-- <ul class="aside-menu">
                      @foreach($loai as $l)
                        <li><a href="{{ route('loaisanpham',$l->id) }}"><b>{{ $l->name }}</b></a></li>
                      @endforeach
                    </ul> --}}
						<div class="group-menu">
							<div class="layered layered-category">
								<div class="layered-content" >
									<ul class="aside-menu">
                                        <div class="page_menu_title title_block">
                                            <h6 style="text-align: center;font-size:20px; color:brown"><b>DANH MỤC TRANG</b></h6>
                                        </div>
									 @foreach($loai as $l)
                                        <li><a href="{{ route('loaisanpham',$l->id) }}"><b style="color:brown">{{ $l->name }}</b></a></li>
                                    @endforeach
									</ul>
								</div>
							</div>
                        </div>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h1 style="color:brown; font-family:Arial, Helvetica, sans-serif"><b>{{ $loai_sanpham->name }}</b></h1>
                        <div class="beta-products-details">
                            <h7 class="pull-left" style="color:brown;"><b>{{count($sanpham_theoloai)}} sản phẩm</b></h7>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                        @foreach($sanpham_theoloai as $sp)
                            <div class="col-sm-4">
                                <div class="single-item" style="height: 90%;">
                                    @if($sp->promotion_price != 0)
                                    @if($sp->unit_price != $sp->promotion_price)

                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif
                                @endif
                                    <div class="single-item-header">
                                        <a href="{{ route('chitietsanpham',['id' => $sp->id])}}"><img src="source/image/product/{{$sp->image}}" alt="" height="200px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title" style="color:brown;"><b>{{ $sp->name }}</b></p>
                                        <p class="single-item-price" style="font-size: 18px">
                                            @if($sp->promotion_price == 0)
                                            <span><b>{{ number_format($sp->unit_price) }} đồng</b></span>
                                        @else
                                            @if($sp->unit_price == $sp->promotion_price)
                                            <span class="flash-sale"><b>{{ number_format($sp->unit_price) }} đồng</b></span>
                                            @else
                                            <span class="flash-del"><b>{{ number_format($sp->unit_price) }} đồng</b></span>
                                            <span class="flash-sale"><b>{{ number_format($sp->promotion_price) }} đồng</b></span>
                                            @endif
                                        @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('themgiohang', $sp->id) }}" style="background-color: rgba(255, 99, 71, 0.6);"><i class="fa fa-shopping-cart" ></i></a>
                                        <a class="beta-btn primary" href="{{ route('chitietsanpham', $sp->id) }}" style="border: 1px solid rgba(255, 99, 71, 0.6); color:brown;"><b>Chi tiết</b><i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>

                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h1 style="color:brown; font-family:Arial, Helvetica, sans-serif;"><b>Sản phẩm khác</b></h1>
                        <div class="beta-products-details">
                            <h7 class="pull-left" style="color:brown;"><b>{{ count($sanpham_khac) }} sản phẩm</b></h7>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($sanpham_khac as $sp_k)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        @if($sp_k->promotion_price != 0)
                                                @if($sp_k->unit_price != $sp_k->promotion_price)

                                                <div class="ribbon-wrapper">
                                                    <div class="ribbon sale">Sale</div>
                                                </div>
                                                @endif
                                            @endif
                                        <div class="single-item-header">
                                            <a href="{{ route('chitietsanpham', ['id' => $sp_k->id]) }}"><img src="source/image/product/{{ $sp_k->image }}" alt="" height="200px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title" style="color:brown;"><b>{{ $sp_k->name }}</b></p>
                                            <p class="single-item-price" style="font-size: 18px">
                                                @if($sp_k->promotion_price == 0)
                                                        <span><b>{{ number_format($sp_k->unit_price) }} đồng</b></span>
                                                    @else
                                                        @if($sp_k->unit_price == $sp_k->promotion_price)
                                                        <span class="flash-sale"><b>{{ number_format($sp_k->unit_price) }} đồng</b></span>
                                                        @else
                                                        <span class="flash-del"><b>{{ number_format($sp_k->unit_price) }} đồng</b></span>
                                                        <span class="flash-sale"><b>{{ number_format($sp_k->promotion_price) }} đồng</b></span>
                                                        @endif
                                                    @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="{{ route('dathang') }}" style="background-color: rgba(255, 99, 71, 0.6);"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('chitietsanpham', $sp_k->id) }}" style="border: 1px solid rgba(255, 99, 71, 0.6); color:brown;"><b>Chi tiết</b><i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>



                        <div class="row">

                                {{$sanpham_khac->links("pagination::bootstrap-4")}}

                        </div>

                    </div>


                        <div class="space40">&nbsp;</div>

                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
