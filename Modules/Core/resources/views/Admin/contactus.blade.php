@extends('core::layouts.master')
@section('content')

    <main class="adminuiux-content has-sidebar" onclick="contentClick()">
        <div class="container-fluid mt-2">
            <div class="bg-theme-1-subtle rounded px-2 py-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                        <i class="fa fa-angle-left"></i>
                        <li class="breadcrumb-item bi"><a href="javascript:void(0)">ارتباط با ما</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container mt-3" id="main-content">
            <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
                <div class="bg-teal text-white px-3 py-1 rounded">
                    <i class="fas fa-info"></i>
                </div>
                <h6>ارتباط با مستر دوربین</h6>
            </div>
            <div class="card adminuiux-card mb-3">
                <div class="card-body" >
                    <form action="{{--{{ route('admin.brand.store') }}--}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="title" class="mb-2">عنوان</label>
                                <input
                                        name="title"
                                        id="title"
                                        placeholder="عنوان"
                                        class="form-control"
                                        aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="subject" class="mb-2">موضوع</label>
                                <input
                                        name="subject"
                                        id="subject"
                                        placeholder="موضوع"
                                        class="form-control"
                                        aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="mobile" class="mb-2">شماره تماس</label>
                                <input
                                        name="mobile"
                                        id="mobile"
                                        type="tel"
                                        placeholder="شماره تماس"
                                        class="form-control"
                                        aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="mb-3 col-lg-12">
                                <label for="description" class="mb-2">پیام</label>
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>


                            <div class="mb-3 col-lg-12 text-start">
                                <button type="submit" class="btn btn-theme">
                                    <i class="fal fa-add"></i>
                                    ارسال
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>
@endsection