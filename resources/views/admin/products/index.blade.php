<!-- resources/views/admin/products/index.blade.php -->
@extends('admin.layout')
@section('content')
<div class="kt-portlet" style="margin-top:-30px">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Danh sách sản phẩm
            </h3>
        </div>
        <div class="kt-portlet__head-label">
            <div class="kt-portlet__head-title">
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Thêm mới</a>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin::Section-->
        <div class="kt-section__content">
            <table class="table">
                <thead>
                    <tr>

                        <th>STT</th>
                        <th>Hình ảnh</th>
                        <th>Tên</th>
                        <th>ID</th>
                        {{-- <th>Mô tả</th> --}}
                        <th>Giá gốc</th>
                        <th>Giá khuyến mãi</th>
                        {{-- <th>Loại sản phẩm</th> --}}
                        {{-- <th>Mới</th> --}}
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="{{ asset('source/image/product/' . $product->image) }}" alt="image" width="100"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->id_type }}</td>
                            {{-- <td>{{ $product->description }}</td> --}}
                            <td>{{ number_format($product->unit_price, 0, ',', '.') }} VND</td>
                            <td>{{ number_format($product->promotion_price, 0, ',', '.') }} VND</td>
                            {{-- <td>{{ $product->unit }}</td> --}}
                            {{-- <td>{{ $product->new ? 'Có' : 'Không' }}</td> --}}
                            <td>
                                <!-- Biểu tượng sửa -->
                                <a href="{{ route('admin.products.edit', $product->id) }}">
                                    <i class="flaticon-edit"></i> <!-- Biểu tượng sửa -->
                                </a>
                                &nbsp;

                                <!-- Biểu tượng xóa -->
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');">
                                        <i class="flaticon-delete"></i> <!-- Biểu tượng xóa -->
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pagination">
                {{ $products->links("pagination::bootstrap-4") }} <!-- Use pagination links -->
            </div>
        </div>

        <!--end::Section-->
    </div>
</div>
@endsection
