@extends('layouts.main')
@section('content')
    <div class="container my-5">
        <h1>تعریف محصول جدید</h1>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Product Name -->
            <div class="form-group mb-3">
                <label for="name" class="form-label">نام محصول</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <!-- Product Description -->
            <div class="form-group mb-3">
                <label for="description" class="form-label">توضیحات</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="4" required>{{ old('description') }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <!-- Product Price -->
            <div class="form-group mb-3">
                <label for="price" class="form-label">قیمت</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ old('price') }}" required>
                @error('price')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <!-- Product Quantity -->
            <div class="form-group mb-3">
                <label for="quantity" class="form-label">تعداد</label>
                <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity"
                    name="quantity" value="{{ old('quantity') }}" required>
                @error('quantity')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <!-- Product Image -->
            <div class="form-group mb-3">
                <label for="image" class="form-label">تصویر</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                    name="image">
                @error('image')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">ساخت محصول</button>
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
