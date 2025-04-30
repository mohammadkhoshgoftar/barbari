@extends('core::layouts.master')
@section('content')
    <main class="adminuiux-content has-sidebar" onclick="contentClick()">
        <div class="container-fluid mt-2">
            <div class="bg-theme-1-subtle rounded px-2 py-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                        <i class="fa fa-angle-left"></i>
                        <li class="breadcrumb-item bi"><a href="{{ route('admin.roles') }}">نقش ها</a></li>
                        <i class="fa fa-angle-left"></i>
                        <li class="breadcrumb-item active bi" aria-current="page">{{ $data->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container mt-3" id="main-content">
            <div class="card shadow-sm border-0 mb-4" >
                <div class="card-header">
                    <div class="row gx-3 align-items-center">
                        <div class="col"><p class="h6">در این قسمت میتوانید اطلاعات {{ $data->name}} را ویرایش کنید</p></div>
                    </div>
                </div>
            </div>

            <div class="card adminuiux-card shadow-sm border-0">
                <div class="card-body" >
                    <form action="{{ route('admin.role.update',['id'=> $data->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="name">نقش</label>
                                <input
                                        name="name"
                                        id="name"
                                        value="{{ $data->name?? '' }}"
                                        placeholder="عنوان"
                                        class="form-control"
                                        aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="mb-3 col-lg-6">
                                <button class="btn btn-accent my-2">
                                    <i class="bi bi-arrow-left mr-2"></i> به روزرسانی
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection