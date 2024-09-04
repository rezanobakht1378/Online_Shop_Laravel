@extends('layouts.main')
@section('css')
<style>
    .custom-clickable-row {
        cursor: pointer;
    }
</style>
@endsection
@section('content') <div class="container my-5">
    <h1>لیست کاربران</h1>

    @if (session('success'))
    <div>{{ session('success') }}</div>
    @endif

    <table id="users_table" class="table table-striped border" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شماره تلفن</th>
                <th>آدرس</th>
                <th>زمان ایجاد</th>
                <th>زمان بروزرسانی</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index=> $user)
            <tr class="custom-clickable-row" data-href="{{ route('user.account',$user->id) }}">
                <td>{{ $index+1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone??'-' }}</td>
                <td>{{ $user->address??'-' }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
    <!-- Pagination links -->
</div>
@endsection
@section('js')
<script>
    $(document).ready( function () {
        $('#users_table').DataTable(
            {
                responsive: true,
                "language": {
                    "sProcessing":   "درحال پردازش...",
                    "sLengthMenu":   "نمایش محتویات _MENU_",
                    "sZeroRecords":  "موردی یافت نشد",
                    "sInfo":         "نمایش _START_ تا _END_ از مجموع _TOTAL_ مورد",
                    "sInfoEmpty":    "تهی",
                    "sInfoFiltered": "(فیلتر شده از مجموع _MAX_ مورد)",
                    "sInfoPostFix":  "",
                    "sSearch":       "جستجو:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "ابتدا",
                        "sPrevious": "قبلی",
                        "sNext":     "بعدی",
                        "sLast":     "انتها"
                    }
                }
            }
        );
    });
    $(document).on('click', '.custom-clickable-row', function(e){
        var url = $(this).data('href');

        window.location = url;
    });
</script>
@endsection
