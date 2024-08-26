@extends('layouts.main')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div>
                <div class="card">
                    <div class="card-header">
                        <strong> {{ $product->name }} </strong>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">توضیحات محصول</h5>

                        <div class="row">
                            <!-- Product Image -->
                            <div class="col-md-4">
                                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <!-- Product Information -->
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>نام: </strong>{{ $product->name }}</li>
                                    <li class="list-group-item"><strong>توضیحات: </strong>{{ $product->description }}</li>
                                    <li class="list-group-item"><strong>قیمت: </strong>${{ $product->price }}</li>
                                    <li class="list-group-item"><strong>موجودی: </strong>{{ $product->stock }}</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Edit Button -->
                        <div class="mt-3">
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-outline-secondary">ویرایش
                                محصول</a>
                            <a href="{{ route('product.destroy', $product->id) }}"
                                class="btn btn-danger btn-outline-secondary text-light">حذف محصول</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
