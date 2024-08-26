<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
    public function create()
    {
        //TODO: check permission to access create product
        return view('products.create');
    }
    public function store(CreateProductRequest $request)
    {
        $product = Product::create($request->except("_token"));
        if ($request->hasFile('image')) {
            $product->addMediaFromRequest('image')->toMediaCollection();
        }
        return redirect()->back()->with("message", "محصول با موفقیت اضافه شد");
    }
    public function edit(Product $product)
    {
        //TODO: check permission to access edit product
        return view('products.edit', compact('product'));//edit
    }
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->except("_token"));
        if ($request->hasFile('image')) {
            if ($product->hasMedia())
                $product->clearMediaCollection();
            $product->addMediaFromRequest('image')->toMediaCollection();
        }
        return redirect()->back()->with("success", "محصول با موفقیت ویرایش شد");
    }
    public function destroy(Product $product)
    {
        $product->clearMediaCollection();
        $product->delete();
        return redirect()->route('index')->with('success','محصول با موفقیت حذف شد');
    }
}
