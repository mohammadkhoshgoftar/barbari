@extends('auth::layouts.auth')
@section('content')
    <main class="flex-shrink-0 pt-0 h-100">
        <div class="container-fluid">
            <div class="auth-wrapper">
                <div class="d-flex flex-column vh-100 pt-ios">
                    <div class="row justify-content-center h-100">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="row h-100 align-items-center justify-content-center my-md-3">
                                <div class="col-12 col-md-10 col-lg-8 col-xxl-6 login-box">
                                    <form method="POST" action="{{route('login.authenticate')}}">
                                        @csrf
                                        <p
                                                class="h1 fw-bold text-center mb-4">ورود</p>


                                        <div class="mb-3">
                                            <label for="mobile">موبایل</label>
                                            <input type="tel"
                                                   class="form-control"
                                                   id="mobile"
                                                   name="mobile"
                                                   placeholder="شماره موبایل را وارد کنید"
                                                   value=""
                                                   autofocus="">
                                        </div>
                                        <div class="position-relative">
                                            <div class="mb-3">
                                                <label for="passwd">رمزعبور</label>
                                                <input type="password"
                                                       class="form-control"
                                                       id="passwd"
                                                       name="password"
                                                       placeholder="رمز عبور خود را وارد کنید">
                                            </div>
                                            <button
                                                    class="btn btn-square btn-link text-theme-1 position-absolute end-0 top-0 mt-2 me-2">
                                                <i class="bi bi-eye"></i></button>
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input"
                                                           type="checkbox"
                                                           name="rememberme"
                                                           id="rememberme">
                                                    <label
                                                            class="form-check-label" for="rememberme">به خاطر
                                                        سپردن</label>
                                                </div>
                                            </div>
                                            {{-- <div class="col-auto"><a href="clinic-forgot-password.html" class="">Forget--}}
                                            {{-- Password?</a></div>--}}
                                        </div>
                                        <button type="submit"
                                                class="btn btn-theme w-100 mb-4">ورود
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection