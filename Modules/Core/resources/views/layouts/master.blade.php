<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>سیستم مدیریت باربری</title>
    <link rel="icon" href="{{asset('favIcon/apple-touch-icon.png')}}">
    @include('core::sections.style')

</head>

<body class="main-bg main-bg-opac main-bg-blur bg-gradient-3 theme-teal scrollup" data-bggradient="bg-gradient-3" data-theme="theme-teal">
    <div class="pageloader">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center text-center h-100">
                <div class="col-12 mb-auto pt-4"></div>
                <div class="col-auto">
                    <img src="{{asset('admin/assets/images/mrDorbinLogo.jpg')}}" alt="" class="height-60 mb-3">
                    <p class="h6 mb-0">سیستم مدیریت باربری</p>
{{--                    <p class="h3 mb-4">Digi Clinic</p>--}}
                    <div class="loaderplus mb-2"></div>
                </div>
                <div class="col-12 mt-auto pb-4">
                    <p class="text-secondary">لطفا منتظر بمانید در حال لود شدن</p>
                </div>
            </div>
        </div>
    </div>
    @include('core::sections.header')

    <div class="adminuiux-wrap">
        @include('core::sections.sidebar')
        @yield('content')
        @include('core::sections.footer')
        @include('core::sections.toast')
    </div>
    @stack('js')
    @include('core::sections.scripts')
</body>

</html>