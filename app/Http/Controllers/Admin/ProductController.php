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
        // Lấy danh sách các loại sản phẩm từ bảng ProductType
        $lstType = Product::where('is_deleted', false)
                    ->where('is_show', true)
                    ->get()
                    ->map(function ($type) {
                        return [
                            'value' => $type->id,
                            'text' => $type->name // Giả định bảng ProductType có cột 'name'
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
        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }
        $product->update($data);
        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}



