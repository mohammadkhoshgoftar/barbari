@extends('core::layouts.master')
@section('content')
    <main class="adminuiux-content has-sidebar" onclick="contentClick()">
        <div class="container-fluid mt-2">
            <div class="bg-theme-1-subtle rounded px-2 py-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                        <i class="fa fa-angle-left"></i>
                        <li class="breadcrumb-item bi"><a href="{{ route('users') }}">کاربران</a></li>
                        <i class="fa fa-angle-left"></i>
                        <li class="breadcrumb-item bi"><a href="javascript:void(0)">ایجاد کاربر</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container mt-3" id="main-content">
            <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
                <div class="bg-teal text-white px-3 py-1 rounded">
                    <i class="fas fa-info"></i>
                </div>
                <h6>در این قسمت میتوانید کاربر جدید اضافه کنید</h6>
            </div>
            <div class="card adminuiux-card mb-3">
                <div class="card-body">
                    <form action="{{ route('store.user') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="name">نام و نام خانوادگی</label>
                                <input
                                        name="name"
                                        id="name"
                                        placeholder="نام و نام خانوادگی"
                                        class="form-control"
                                        aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="mobile">شماره تلفن</label>
                                <input
                                        name="mobile"
                                        id="mobile"
                                        type="tel"
                                        placeholder="شماره تلفن"
                                        class="form-control"
                                        aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="email">ایمیل</label>
                                <input
                                        name="email"
                                        id="email"
                                        type="email"
                                        placeholder="ایمیل"
                                        class="form-control"
                                        aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="col-lg-6">
                                <label for="role_id">نقش</label>
                                <select class="form-select" name="role_id" id="role_id">
                                    <option> انتخاب نقش</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="password">رمز عبور</label>
                                <input
                                        name="password"
                                        id="password"
                                        type="password"
                                        placeholder="رمزعبور"
                                        class="form-control"
                                        aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="email">تکرار رمز عبور</label>
                                <input
                                        name="password_confirm"
                                        id="password_confirm"
                                        type="password"
                                        placeholder="تکرار رمز عبور"
                                        class="form-control"
                                        aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="mb-3 col-lg-12 text-start">
                                <button type="submit" class="btn btn-theme">
                                    <i class="fal fa-add"></i>
                                    افزودن کاربر
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
