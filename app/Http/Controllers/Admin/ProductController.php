<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        // Lấy danh sách các loại sản phẩm từ bảng type_products
        $lstType = Product::where('is_deleted', false)
            ->where('is_show', true)
            ->join('type_products', 'products.id_type', '=', 'type_products.id') // Sử dụng cột id_type
            ->select('products.*', 'type_products.name as type_name') // Lấy tên loại sản phẩm
            ->get()
            ->map(function ($product) {
                return [
                    'value' => $product->id,
                    'text' => $product->type_name // Sử dụng tên loại sản phẩm
                ];
            });
        // Gửi danh sách type sang view
        return view('admin.products.create', ['types' => $lstType]);

    }



    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . '.' .$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;

        }

        Product::create($data);
        return redirect()->route('admin.products.index');
    }

    public function edit(Product $product)
{
    return view('admin.products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    // Validate dữ liệu từ request
    $data = $request->validate([
        'name' => 'required|string|max:100',
        'id_type' => 'nullable|integer',
        'description' => 'nullable|string',
        'unit_price' => 'required|numeric',
        'promotion_price' => 'nullable|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'unit' => 'nullable|string',
        'new' => 'nullable|boolean',
    ]);


    // Xử lý upload ảnh (nếu có)
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $data['image'] = $imageName;
    } else {
        // Nếu không có ảnh mới, giữ nguyên ảnh hiện tại
        $data['image'] = $product->image;
    }

    // Đảm bảo trường 'new' có giá trị
    if (!array_key_exists('new', $data)) {
        $data['new'] = $product->new; // Giữ nguyên giá trị hiện tại nếu không có giá trị mới
    }

    // Cập nhật sản phẩm
    $product->update($data);

    // Chuyển hướng về danh sách sản phẩm với thông báo thành công
    return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
}




    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}



