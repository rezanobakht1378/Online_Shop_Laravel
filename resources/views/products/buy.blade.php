@extends('layouts.main')
@section('content')
<div class="container my-5">
    <h1>فاکتور {{ $product->name }}</h1>
    <form action="{{ route('order.store', $product) }}" method="POST">
        @csrf
        <p><strong>نام محصول: </strong>{{ $product->name }}</p>
        <p><strong>توضیحات محصول: </strong>{{ $product->description }}</p>
        <p><strong>قیمت محصول: </strong>{{ number_format($product->price) }} تومان</p>
        <!-- Submit Button -->
        <div class="form-group">
            @if($product->quantity >1)
            <button type="submit" class="btn btn-primary">پرداخت</button>
            @else
            <button type="button" class="btn btn-danger" disabled>ناموجود</button>
            @endif
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('success'))
        <div class="alert alert-success m-3">
            {{ session('success') }}
        </div>
        @endif
    </form>
</div>
@endsection
