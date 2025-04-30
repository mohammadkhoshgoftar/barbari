@extends('core::layouts.master')
@section('content')
    <main class="adminuiux-content has-sidebar" onclick="contentClick()">
        <div class="container-fluid mt-2">
            <div class="bg-theme-1-subtle rounded px-2 py-2">
                <nav aria-label="breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item bi"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                            <i class="fa fa-angle-left"></i>
                            <li class="breadcrumb-item bi"><a href="{{ route('admin.roles') }}">نقش ها</a></li>
                            <i class="fa fa-angle-left"></i>
                            <li class="breadcrumb-item bi"><a href="javascript:void(0)">ایجاد نقش جدید</a></li>                    </ol>
                    </nav>
                </nav>
            </div>
        </div>
        <div class="container mt-3" id="main-content">
            <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
                <div class="bg-teal text-white px-3 py-1 rounded">
                    <i class="fas fa-info"></i>
                </div>
                <h6>در این قسمت میتوانید نقش جدید ایجاد کنید</h6>
            </div>
            <div class="card adminuiux-card mb-3">
                <div class="card-body">
                    <form action="{{ route('admin.role.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="name">نقش</label>
                                <input
                                        name="name"
                                        id="name"
                                        placeholder="نقش"
                                        class="form-control"
                                        aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="mb-3 col-lg-12 text-start">
                                <button type="submit" class="btn btn-theme">
                                    <i class="fal fa-add"></i>
                                    افزودن نقش
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


@endsection
