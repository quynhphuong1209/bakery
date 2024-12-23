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


<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer" >
        <div class="banner" >
                <ul>
                    @foreach($slide as $sl)
                    <!-- THE FIRST SLIDE -->
                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                            </div>
                        </div>
                    </li>
                @endforeach

                </ul>
            </div>
        </div>

        <div class="tp-bannertimer"></div>
    </div>
</div>
<!--slider-->
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h1 style="color:brown; font-family:Arial, Helvetica, sans-serif"><b>Sản phẩm mới</b></h1>
                        <div class="beta-products-details">
                            <h7 class="pull-left" style="color:brown"><b>{{count($new_product)}} sản phẩm</b></h7>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($new_product as $new)
                                {{-- @if($new->unit_price != $new->promotion_price) --}}
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
                                                <a href="{{ route('chitietsanpham', $new->id) }}"><img src="source/image/product/{{ $new->image }}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title" style="color:brown"><b>{{ $new->name }}</b></p>
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
                                {{-- @endif --}}
                            @endforeach
                        </div>
                        <div class="row">{{ $new_product->links("pagination::bootstrap-4") }}</div>
                        {{-- <ul class="pagination"><li class="page-item" style="color:rgba(255, 99, 71, 0.6)">
                            <a class="page-link" href="{{  }}"</li></ul> --}}
                        </div>


                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h1 style="color:brown; font-family:Arial, Helvetica, sans-serif"><b>Sản phẩm khuyến mãi</b></h1>
                        <div class="beta-products-details">
                            <h7 class="pull-left" style="color:brown"><b>{{count($sanpham_khuyenmai)}} sản phẩm</b></h7>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                           @foreach($sanpham_khuyenmai as $spkm)
                               <div class="col-sm-3">
                                   <div class="single-item">
                                    @if($spkm->promotion_price != 0)
                                        @if($spkm->unit_price != $spkm->promotion_price)

                                        <div class="ribbon-wrapper">
                                            <div class="ribbon sale">Sale</div>
                                        </div>
                                        @endif
                                    @endif
                                        <div class="single-item-header">
                                            <a href="{{ route('chitietsanpham',$spkm->id) }}"><img src="source/image/product/{{ $spkm->image }}" alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title" style="color:brown"><b>{{ $spkm->name }}</b></p>
                                            <p class="single-item-price" style="font-size:18px">
                                                @if($spkm->promotion_price == 0)
                                                    <span><b>{{ number_format($spkm->unit_price) }} đồng</b></span>
                                                @else
                                                    @if($spkm->unit_price == $spkm->promotion_price)
                                                    <span class="flash-sale"><b>{{ number_format($spkm->unit_price) }} đồng</b></span>
                                                    @else
                                                    <span class="flash-del"><b>{{ number_format($spkm->unit_price) }} đồng</b></span>
                                                    <span class="flash-sale"><b>{{ number_format($spkm->promotion_price) }} đồng</b></span>
                                                    @endif
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                           <a class="add-to-cart pull-left" href="{{ route('themgiohang',$spkm->id) }}" style="background-color: rgba(255, 99, 71, 0.6)"><i class="fa fa-shopping-cart"></i></a>
                                           <a class="beta-btn primary" href="{{ route('chitietsanpham',$spkm->id) }}" style="border: 1px solid rgba(255, 99, 71, 0.6); color:brown"><b>Chi tiết </b><i class="fa fa-chevron-right"></i></a>
                                           <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">{{ $sanpham_khuyenmai->links("pagination::bootstrap-4") }}</div>
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
@endsection


