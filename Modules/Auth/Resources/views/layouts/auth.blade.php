<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>آقای دوربین</title>
    <link rel="icon" type="image/png" href="{{asset('admin/images/mrDorbinLogo.jpg')}}">
    @include('core::sections.style')

</head>

<body class="main-bg main-bg-opac main-bg-blur bg-gradient-3 theme-teal scrollup" data-bggradient="bg-gradient-3"
      data-theme="theme-teal">
<div class="pageloader">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
            <div class="col-12 mb-auto pt-4"></div>
            <div class="col-auto">
                <img src="{{asset('admin/assets/images/mrDorbinLogo.jpg')}}" alt="" class="height-60 mb-3">
                <p class="h6 mb-0">آقای دوربین</p>
                {{--                    <p class="h3 mb-4">Digi Clinic</p>--}}
                <div class="loaderplus mb-2"></div>
            </div>
            <div class="col-12 mt-auto pb-4">
                <p class="text-secondary">لطفا منتظر بمانید در حال لود شدن</p>
            </div>
        </div>
    </div>
</div>
<div class="adminuiux-wrap">

    @yield('content')
</div>
</body>
</html>
