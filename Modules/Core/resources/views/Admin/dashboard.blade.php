@extends('core::layouts.master')

@section('content')
<main class="adminuiux-content has-sidebar" onclick="contentClick()">
    <div class="container w-100 mt-3" id="main-content">
{{--        <div class="card-header mb-3">--}}
{{--            <div class="row gx-3 align-items-center">--}}
{{--                <div class="col">--}}
{{--                    <div class="align-items-center card d-flex flex-row gap-2 p-2 rounded-4">--}}
{{--                        <div class="bg-teal text-white px-3 py-1 rounded">--}}
{{--                            <i class="fas fa-info"></i>--}}
{{--                        </div>--}}
{{--                        <h6>در این قسمت میتوانید تمامی محصولات هارا مشاهده کنید</h6>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="adminuiux-card mb-3">
            <div class="row">
{{--                <div class="col-lg-2">--}}
{{--                    <div class="card rounded-4">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <a href="{{route('users')}}" class="text-decoration-none d-flex flex-column">--}}
{{--                                <div class="avatar avatar-40 rounded mb-3">--}}
{{--                                    <i class="fa-thin fa-users"></i>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex py-1 gap-2 align-items-center justify-content-center bg-light-teal rounded">--}}
{{--                                    <p class="h4 mb-0"> {!! $userCount !!}--}}
{{--                                    </p>--}}
{{--                                    <p class="small">کاربران</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-2">--}}
{{--                    <div class="card rounded-4">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <a href="{{route('admin.products')}}" class="text-decoration-none d-flex flex-column">--}}
{{--                                <div class="avatar avatar-40 rounded mb-3">--}}
{{--                                    <i class="fa-thin fa-shop"></i>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex py-1 gap-2 align-items-center justify-content-center bg-light-teal rounded">--}}
{{--                                    <p class="h4 mb-0">{!! $productCount !!}--}}
{{--                                    </p>--}}
{{--                                    <p class="small">محصولات</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-2">--}}
{{--                    <div class="card rounded-4">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <a href="{{route('admin.categories')}}" class="text-decoration-none d-flex flex-column">--}}
{{--                                <div class="avatar avatar-40 rounded mb-3">--}}
{{--                                    <i class="fa-thin fa-layer-group"></i>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex py-1 gap-2 align-items-center justify-content-center bg-light-teal rounded">--}}
{{--                                    <p class="h4 mb-0">{!! $categoryCount !!}--}}
{{--                                    </p>--}}
{{--                                    <p class="small">دسته بندی</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-2">--}}
{{--                    <div class="card rounded-4">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <a href="{{route('admin.brands')}}" class="text-decoration-none d-flex flex-column">--}}
{{--                                <div class="avatar avatar-40 rounded mb-3">--}}
{{--                                    <i class="fa-thin fa-copyright"></i>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex py-1 gap-2 align-items-center justify-content-center bg-light-teal rounded">--}}
{{--                                    <p class="h4 mb-0">{!! $brandCount !!}--}}
{{--                                    </p>--}}
{{--                                    <p class="small">برند</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

        </div>
    </div>
</main>
@endsection