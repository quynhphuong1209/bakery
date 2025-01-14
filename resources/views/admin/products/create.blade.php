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
                        <h3 class="kt-portlet__head-title">Thêm sản phẩm mới</h3>
                    </div>
                </div>
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="control-label">Tên sản phẩm:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="id_type" class="control-label">Type ID:</label>
                        <input type="number" id="id_type" name="id_type" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label">Mô tả:</label>
                        <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="unit_price" class="control-label">Giá gốc:</label>
                        <input type="number" id="unit_price" name="unit_price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="promotion_price" class="control-label">Giá khuyến mãi:</label>
                        <input type="number" id="promotion_price" name="promotion_price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image" class="control-label">Ảnh:</label>
                        <input type="file" id="image" name="image" class="form-control-file" required>
                    </div>
                    <div class="form-group">
                        <label for="unit" class="control-label">Đơn vị:</label>
                        <input type="text" id="unit" name="unit" class="form-control" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" id="new" name="new" class="form-check-input">
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

@endsection
