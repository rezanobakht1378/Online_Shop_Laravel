@extends('layouts\main')
@section('content')
    <section class="py-3 text-center container">
        <div class="row pt-lg-5">
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
        </div>
    </section>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <a href="#">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="{{ asset('img/noImage.png') }}" />
                            <div class="card-body">
                                <p class="card-text">عطر فوق العاده عالی و مخصوص آقایان و بانوان</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        {{-- <button type="button" class="btn btn-sm btn-outline-secondary">نمایش</button> --}}
                                        <button type="button" class="btn btn-sm btn-outline-secondary">ویرایش</button>
                                    </div>
                                    <small class="text-body-secondary">{{ number_format(53000) }} تومان</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @foreach ($products as $product)
                    <div class="col">
                        <a href="{{ route('product.show', $product) }}">
                            <div class="card shadow-sm">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    src="{{ $product->image }}" />
                                <div class="card-body">
                                    <p class="card-text">{{ $product->description }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">نمایش</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">ویرایش</button>
                                        </div>
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
    </div>
@endsection
