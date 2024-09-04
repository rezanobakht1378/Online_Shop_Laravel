<header data-bs-theme="dark">
    <div class="collapse text-bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4>درباره ما</h4>
                    <p class="text-body-secondary" style="text-align: justify">ما در فروشگاه عطر هاشمی با افتخار مجموعه‌ای بی‌نظیر از بهترین عطرهای اورجینال و باکیفیت را برای شما
                        عزیزان گردآوری کرده‌ایم. هدف ما این است که با ارائه محصولات معتبر از برندهای معتبر جهانی، تجربه‌ای
                        متفاوت از خرید عطر را برای شما به ارمغان بیاوریم.
                        در فروشگاه هاشمی، می‌توانید انواع عطرهای مردانه و زنانه، با رایحه‌های متنوع و ماندگاری بالا را بیابید.
                        ما به اصالت محصولات و رضایت مشتریان اهمیت ویژه‌ای می‌دهیم و تمامی سفارشات شما را در کوتاه‌ترین زمان ممکن
                        به دستتان می‌رسانیم.
                        خریدی مطمئن و لذت‌بخش را در فروشگاه هاشمی تجربه کنید و با رایحه‌ای منحصر به فرد، خاص باشید.
                        </p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4>تماس با ما</h4>
                    <ul class="list-unstyled">
                        <li><a href="tel:+989103649233" class="btn my-2"><i class="bi bi-telephone"> 0989103649233</i></a></li>
                    </ul>
                </div>
                @guest
                    <a href="{{ route('user.registerPage') }}">ثبت نام</a>
                    <a href="{{ route('user.loginPage') }}">ورود</a>
                @endguest
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{route('index')}}" class="navbar-brand d-flex align-items-center">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg> --}}
                <strong>{{ config('app.name', 'Laravel') }}</strong>
                <img height="43" src="{{ asset('img/logo-light.png') }}" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
