@extends('layouts\main')
@section('content')
    <section class="card mt-3 py-3 text-center container rounded rounded-3 shadow">
        <div class="mx-auto">
            <h1 class="fw-light">فروشگاه عطر هاشمی - رایحه‌ای از کیفیت و اعتماد</h1>
            <p class="lead text-body-secondary" style="text-align: justify;">
                به فروشگاه عطر هاشمی خوش آمدید!
                ما در فروشگاه عطر هاشمی با افتخار مجموعه‌ای بی‌نظیر از بهترین عطرهای اورجینال و باکیفیت را برای شما
                عزیزان گردآوری کرده‌ایم. هدف ما این است که با ارائه محصولات معتبر از برندهای معتبر جهانی، تجربه‌ای
                متفاوت از خرید عطر را برای شما به ارمغان بیاوریم.
                در فروشگاه هاشمی، می‌توانید انواع عطرهای مردانه و زنانه، با رایحه‌های متنوع و ماندگاری بالا را بیابید.
                ما به اصالت محصولات و رضایت مشتریان اهمیت ویژه‌ای می‌دهیم و تمامی سفارشات شما را در کوتاه‌ترین زمان ممکن
                به دستتان می‌رسانیم.
                خریدی مطمئن و لذت‌بخش را در فروشگاه هاشمی تجربه کنید و با رایحه‌ای منحصر به فرد، خاص باشید.
                منتظر حضور شما در فروشگاه آنلاین عطر هاشمی هستیم!
            </p>
            <p>
                <a href="tel:+989103649233" class="btn btn-lg btn-success my-2"><i class="bi bi-telephone"></i></a>
            </p>
        </div>
    </section>
    <div class="container card album mt-3 py-5 bg-body-tertiary shadow rounded rounded-3">
        @if (session('success'))
            <div class="alert alert-success m-3">
                {{ session('success') }}
            </div>
        @endif
        @can('product.create')
            <div class="col-3">
                <a href="{{ route('product.create') }}" class="btn btn-success mb-3">اضافه کردن محصول<i
                        class="bi bi-file-earmark-plus-fill"></i></a>
            </div>
        @endcan
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($products as $product)
                <div class="col">
                    <a href="{{ route('product.show', $product) }}">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="{{ $product->image }}" />
                            <div class="card-body">
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    @can('product.update')
                                        <div class="btn-group">
                                            <form action="{{ route('product.edit', $product) }}" method="GET">
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">ویرایش</button>
                                            </form>
                                        </div>
                                    @endcan
                                    <small class="text-body-secondary">{{ number_format($product->price) }} تومان
                                    </small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
