<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
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
        //TODO: return view of product details and product data is $product
    }
    public function create()
    {
        //TODO: check permission to access create product
        return view('products.create');
    }
    public function store(CreateProductRequest $request)
    {
        $product = Product::create($request->except("_token"));
        // Handle Image Upload
        if ($request->hasFile('image')) {
            $product->addMediaFromRequest('image')->toMediaCollection();
        }
        return redirect()->back()->with("message", "محصول با موفقیت اضافه شد");
    }
    public function edit()
    {
        //TODO: check permission to access edit product
        return view('products.create');//edit
    }
}
