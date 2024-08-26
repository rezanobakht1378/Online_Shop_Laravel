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
        //TODO: return view with $products
    }
    public function show(Product $product)
    {
        //TODO: return view of product details and product data is $product
    }
    public function create()
    {
        //TODO: check permission to access create product
        //TODO: return view of create product
    }
    public function store(CreateProductRequest $request)
    {
        $product = Product::create($request->except("_token"));
        return redirect()->back()->with("message","محصول با موفقیت اضافه شد");
    }
}
