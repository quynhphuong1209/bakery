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
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h1 style="color:brown; font-family:Arial, Helvetica, sans-serif"><b>Tìm kiếm</b></h1>
                        <div class="beta-products-details">
                            <p class="pull-left" style="color:brown;"><b>{{count($product)}} sản phẩm</b></p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($product as $new)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if($new->promotion_price != 0)
                                    @if($new->unit_price != $new->promotion_price)

                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif
                                @endif
                                    <div class="single-item-header">
                                        <a href="{{ route('chitietsanpham',$new->id) }}"><img src="source/image/product/{{ $new->image }}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title" style="color:brown;"><b>{{ $new->name }}</b></p>
                                        <p class="single-item-price" style="font-size:18px">
                                            @if($new->promotion_price == 0)
                                            <span><b>{{ number_format($new->unit_price) }} đồng</b></span>
                                        @else
                                            @if($new->unit_price == $new->promotion_price)
                                            <span class="flash-sale"><b>{{ number_format($new->unit_price) }} đồng</b></span>
                                            @else
                                            <span class="flash-del"><b>{{ number_format($new->unit_price) }} đồng</b></span>
                                            <span class="flash-sale"><b>{{ number_format($new->promotion_price) }} đồng</b></span>
                                            @endif
                                        @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{ route('themgiohang', $new->id) }}" style="background-color: rgba(255, 99, 71, 0.6);"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="{{ route('chitietsanpham', $new->id) }}" style="border: 1px solid rgba(255, 99, 71, 0.6); color:brown;"><b>Chi tiết</b><i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->

                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
@endsection
