@extends('core::layouts.master')
@section('content')
<main class="adminuiux-content has-sidebar" onclick="contentClick()">
    <div class="container-fluid mt-2">
        <div class="bg-theme-1-subtle rounded px-2 py-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item bi"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                    <i class="fa fa-angle-left"></i>
                    <li class="breadcrumb-item bi"><a href="{{ route('admin.products') }}">محصولات</a></li>
                    <i class="fa fa-angle-left"></i>
                    <li class="breadcrumb-item active bi" aria-current="page">{{ $data->title}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container mt-3" id="main-content">
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header">
                <div class="row gx-3 align-items-center">
                    <div class="col">
                        <p class="h6">در این قسمت میتوانید اطلاعات
                            <span class="badge badge-light text-bg-dark">{{ $data->title}}</span>
                            را ویرایش کنید
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card rounded-4">
            <div class="card-body">
                <form action="{{ route('admin.product.update',['id'=> $data->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="title">عنوان</label>
                            <input
                                name="title"
                                id="title"
                                value="{{ $data?->title }}"
                                placeholder="عنوان"
                                class="form-control"
                                aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="image">تصویر</label>
                            <input
                                name="images[]"
                                multiple
                                id="image"
                                type="file"
                                class="form-control"
                                aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="col-12 mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="mb-2" for="category_id">دسته بندی</label>
                                    <select class="form-select" name="category_id" id="category_id">
                                        <option> انتخاب دسته بندی</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $data->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label class="mb-2" for="brand_id">برند</label>
                                    <select class="form-select" name="brand_id" id="brand_id">
                                        <option> انتخاب برند</option>
                                        @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}" {{ $data->brand_id == $brand->id ? 'selected' : '' }}>
                                            {{ $brand->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 col-lg-12">
                            <label class="mb-2" for="description">توضیحات</label>
                            <textarea name="description"
                                id="description"
                                class="form-control">{!! $data?->description !!}</textarea>
                        </div>

                        <div class="mb-3 col-lg-4">
                            <label class="mb-2" for="price">قیمت اجاره</label>
                            <input
                                name="price"
                                id="price"
                                value="{{ number_format($data?->price) }}"
                                placeholder="قیمت اجاره"
                                type="text"
                                class="form-control"
                                aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="mb-3 col-lg-2">
                            <label class="mb-2" for="quantity">تعداد اجاره</label>
                            <input
                                name="quantity"
                                id="quantity"
                                value="{{ $data?->quantity }}"
                                type="number"
                                placeholder="تعداد اجاره"
                                class="form-control"
                                aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="mb-3 col-lg-4">
                            <label class="mb-2" for="sale_price">قیمت فروش</label>
                            <input
                                name="sale_price"
                                id="sale_price"
                                value="{{ number_format($data?->sale_price) }}"
                                placeholder="قیمت فروش"
                                type="text"
                                class="form-control"
                                aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="mb-3 col-lg-2">
                            <label class="mb-2" for="sale_quantity">تعداد فروش</label>
                            <input
                                name="sale_quantity"
                                id="sale_quantity"
                                value="{{ $data?->sale_quantity }}"
                                type="number"
                                placeholder="تعداد فروش"
                                class="form-control"
                                aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="serialNumber">شماره سریال</label>
                            <input
                                name="serialNumber"
                                id="serialNumber"
                                value="{{ $data?->serialNumber }}"
                                type="number"
                                placeholder="شماره سریال"
                                class="form-control"
                                aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label class="mb-2" for="active"> وضعیت فعال سازی</label>
                            <input
                                name="active"
                                id="active"
                                type="checkbox"
                                value="1"
                                {{ $data->active == 1 ? 'checked' : ''}}
                                placeholder="وضعیت فعال سازی"
                                class="form-check-input"
                                aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="col-12 mb-3">
                            <div class="row">
                                @foreach(json_decode($data->images) as $image)
                                <div class="col-2">
                                    <img class="img-fluid" src="{{ImageResize::getOrResizeImage($image , 'product')}}">
                                    <a href="">
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="fa-light fa-trash"></i> حذف
                                        </button>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-3 col-lg-12 text-start">
                            <button type="submit" class="btn btn-theme">
                                <i class="fal fa-edit"></i>
                                ویرایش محصول
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
@push('js')
    <script>
        const priceInput = document.getElementById('price');
        priceInput.addEventListener('input', function () {
            let rawValue = this.value.replace(/,/g, '').replace(/[^0-9]/g, '');
            let formattedValue = rawValue.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            this.value = formattedValue;
        });

        const priceSaleInput = document.getElementById('sale_price');
        priceSaleInput.addEventListener('input', function () {
            let rawValue = this.value.replace(/,/g, '').replace(/[^0-9]/g, '');
            let formattedValue = rawValue.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            this.value = formattedValue;
        });
    </script>
@endpush