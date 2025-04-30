@extends('core::layouts.master')
@section('content')

    <main class="adminuiux-content has-sidebar" onclick="contentClick()">
        <div class="container-fluid mt-2">
            <div class="bg-theme-1-subtle rounded px-2 py-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                        <i class="fa fa-angle-left"></i>
                        <li class="breadcrumb-item bi"><a href="javascript:void(0)">درباره ما</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container mt-3" id="main-content">
            <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
                <div class="bg-teal text-white px-3 py-1 rounded">
                    <i class="fas fa-info"></i>
                </div>
                <h6>درباره مستر دوربین</h6>
            </div>
            <div class="card adminuiux-card m-3">
                <div class="card">
                    <header class="my-4 me-3">
                        <h1>درباره ما</h1>
                    </header>

                    <section class="mx-3">
                        <h2>آقای دوربین؛ تجربه‌ای نو در دنیای تصویر</h2>
                        <p>در <strong>آقای دوربین</strong>، ما به عشق تصویر و ثبت لحظات، یک پلتفرم جامع برای خرید و اجاره دوربین و تجهیزات جانبی راه‌اندازی کرده‌ایم. با سال‌ها تجربه در صنعت عکاسی و فیلم‌برداری، رسالت ما این است که دسترسی به بهترین تجهیزات را برای حرفه‌ای‌ها و علاقه‌مندان آسان کنیم.</p>
                    </section>

                    <section class="mx-3 mt-3">
                        <h2>چرا آقای دوربین؟</h2>
                        <ul>
                            <li><strong>تنوع بی‌نظیر محصولات:</strong> مجموعه‌ای گسترده از دوربین‌های عکاسی، فیلم‌برداری، لنزها، گیمبال‌ها، نورپردازی، میکروفون‌ها و سایر لوازم جانبی از برترین برندهای دنیا.</li>
                            <li><strong>امکان اجاره تجهیزات حرفه‌ای:</strong> اگر برای پروژه‌ای خاص به تجهیزات حرفه‌ای نیاز دارید، می‌توانید با هزینه‌ای مقرون‌به‌صرفه، آنها را اجاره کنید.</li>
                            <li><strong>مشاوره تخصصی:</strong> تیم ما از عکاسان و فیلم‌برداران حرفه‌ای تشکیل شده است که آماده‌اند تا بهترین پیشنهادها را متناسب با نیازهای شما ارائه دهند.</li>
                            <li><strong>تضمین کیفیت و سلامت کالا:</strong> تمامی تجهیزات قبل از ارسال بررسی و تست می‌شوند تا خیال شما از بابت کیفیت و عملکرد آنها راحت باشد.</li>
                            <li><strong>ارسال سریع و مطمئن:</strong> چه در تهران و چه در سایر شهرها باشید، سفارش شما در کمترین زمان ممکن به دستتان خواهد رسید.</li>
                        </ul>
                    </section>

                    <section class="mx-3 mt-3">
                        <h2>مأموریت ما</h2>
                        <p>ما در آقای دوربین باور داریم که هر فردی شایسته استفاده از بهترین تجهیزات برای خلق تصاویر ماندگار است. هدف ما ارائه راهکارهایی انعطاف‌پذیر، به‌صرفه و حرفه‌ای برای خرید و اجاره تجهیزات تصویربرداری است تا هیچ محدودیتی سد راه خلاقیت شما نشود.</p>
                    </section>

                    <section class="mx-3 mt-3">
                        <h2>با ما همراه شوید</h2>
                        <p>اگر شما هم به دنیای عکاسی و فیلم‌برداری علاقه دارید، <strong>آقای دوربین</strong> در کنار شماست. ما فقط یک فروشگاه نیستیم، بلکه جامعه‌ای از خلاقان تصویری هستیم که می‌خواهند دنیا را از دریچه‌ای متفاوت ببینند.</p>
                    </section>

                    <footer class="mx-3 my-3">
                        <h2>تماس با ما</h2>
                        <p><strong>آدرس:</strong>آدرس:قم٫فلکه میثم،کوچه بانک ملی٫پلاک 3</p>
{{--                        <p><strong>ایمیل:</strong> <a href="mailto:[ایمیل شما]">[ایمیل شما]</a></p>--}}
                        <p><strong>تلفن:</strong> <a href="tel:09122537805">09122537805</a></p>
                        <p><strong>ما اینجاییم تا تصویری که در ذهن دارید، واقعی شود!</strong> 🎥📷</p>
                    </footer>
                </div>
            </div>
        </div>
    </main>
@endsection