@extends('admin.layout')
@section('content')

<style>
    .form-group {
        margin-left: 20px;
        margin-right: 20px;
        margin-top: 20px;
    }

</style>
<div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid" style="margin-top: -30px">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">Chỉnh sửa sản phẩm</h3>
                    </div>
                </div>

                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="control-label">Tên sản phẩm:</label>
                        <input type="text" id="name" name="name" value="{{ $product->name }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="id_type" class="control-label">ID Loại:</label>
                        <input type="number" id="id_type" name="id_type" value="{{ $product->id_type }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label">Mô tả:</label>
                        <textarea id="description" name="description" class="form-control" rows="5" required>{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="unit_price" class="control-label">Giá gốc:</label>
                        <input type="number" id="unit_price" name="unit_price" value="{{ $product->unit_price }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="promotion_price" class="control-label">Giá khuyến mãi:</label>
                        <input type="number" id="promotion_price" name="promotion_price" value="{{ $product->promotion_price }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image" class="control-label">Ảnh:</label>
                        <input type="file" id="image" name="image" class="form-control-file">
                        <img src="source/image/product/{{ $product->image }}" alt="{{ $product->name }}" class="mt-2 img-thumbnail" width="100">
                    </div>
                    <div class="form-group">
                        <label for="unit" class="control-label">Đơn vị:</label>
                        <input type="text" id="unit" name="unit" value="{{ $product->unit }}" class="form-control" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" id="new" name="new" class="form-check-input" {{ $product->new ? 'checked' : '' }}>
                        <label for="new" class="form-check-label">Mới</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Lưu</button>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
@endsection

