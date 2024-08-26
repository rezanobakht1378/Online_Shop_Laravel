@extends('layouts\main')
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">به فروشگاه عطر هاشمی خوش آمدید!</h1>
                <p class="lead text-body-secondary">
                    ما در فروشگاه عطر هاشمی با افتخار مجموعه‌ای بی‌نظیر از بهترین عطرهای اورجینال و باکیفیت را برای شما عزیزان گردآوری کرده‌ایم. هدف ما این است که با ارائه محصولات معتبر از برندهای معتبر جهانی، تجربه‌ای متفاوت از خرید عطر را برای شما به ارمغان بیاوریم.
                    در فروشگاه هاشمی، می‌توانید انواع عطرهای مردانه و زنانه، با رایحه‌های متنوع و ماندگاری بالا را بیابید. ما به اصالت محصولات و رضایت مشتریان اهمیت ویژه‌ای می‌دهیم و تمامی سفارشات شما را در کوتاه‌ترین زمان ممکن به دستتان می‌رسانیم.
                    خریدی مطمئن و لذت‌بخش را در فروشگاه هاشمی تجربه کنید و با رایحه‌ای منحصر به فرد، خاص باشید.
                    منتظر حضور شما در فروشگاه آنلاین عطر هاشمی هستیم!

                    فروشگاه عطر هاشمی - رایحه‌ای از کیفیت و اعتماد
                </p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">نمایش</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">ویرایش</button>
                                </div>
                                <small class="text-body-secondary">{{number_format(53000)}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">{{$product->description}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">نمایش</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">ویرایش</button>
                                    </div>
                                    <small class="text-body-secondary">{{number_format($product->price)}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
