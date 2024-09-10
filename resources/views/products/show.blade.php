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
                                    <li class="list-group-item"><strong>قیمت: </strong>
                                        {{ number_format($product->price) }} تومان</li>
                                    <li class="list-group-item"><strong>موجودی: </strong>{{ $product->quantity }}</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Edit Button -->
                        @can(['product.update', 'product.delete'])
                            <div class="mt-3">
                                <form action="{{ route('product.destroy', $product) }}" method="POST">
                                    @can('product.update')
                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-outline-secondary">ویرایش
                                            محصول</a>
                                    @endcan
                                    @csrf
                                    @can('product.delete')
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-outline-secondary text-light">حذف
                                            محصول</button>
                                    @endcan
                                </form>
                            </div>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
