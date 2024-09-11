@extends('layouts.main')
@section('content')
    <div class="container my-5">
        <h1>فاکتور {{ $product->name }}</h1>
        <form action="{{ route('order.store', $product) }}" method="POST">
            @csrf

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">پرداخت</button>
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
