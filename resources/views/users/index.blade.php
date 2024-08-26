@extends('layouts.main')
@section('content')
    <div class="container my-5">
        <h1>لیست کاربران</h1>

        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif

        <table border="1">
            <thead>
                <tr>
                    <th>شماره کاربری</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>شماره تلفن</th>
                    <th>زمان ایجاد</th>
                    <th>زمان بروزرسانی</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $users->links() }} <!-- Pagination links -->
    </div>
@endsection
