@extends('layouts.main')
@section('content')
<div class="container mt-5 card shadow px-0">
    <div class="card-header">
        <div class="card-title">{{ $user->name }}</div>
    </div>
    <div class="card-body d-flex">
        <div class="col-4 d-flex">
            <strong class="mx-3">ایمیل:</strong>
            <p>{{ $user->email }}</p>
        </div>
        <div class="col-4 d-flex">
            <strong class="mx-3">تلفن:</strong>
            <p>{{ $user->phone??'-' }}</p>
        </div>
        <div class="col-4 d-flex">
            <strong class="mx-3">آدرس:</strong>
            <p>{{ $user->address??'-' }}</p>
        </div>
    </div>
</div>
@endsection
