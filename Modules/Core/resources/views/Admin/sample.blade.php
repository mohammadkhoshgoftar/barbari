@extends('core::layouts.master')

@section('content')
<main class="adminuiux-content" onclick="contentClick()">
    <div class="container mt-3">
        <div class="card-header">
            <div class="row gx-3 align-items-center">
                <h6>
                    عنوان
                </h6>
                <div class="col">
                    <p class="h6">در این قسمت میتوانید دسته بندی ایجاد کنید</p>
                </div>
            </div>
        </div>
        <div class="card adminuiux-card mb-3 text-right">
            <div class="card-body">
                <div class="form">
                    <div class="input-container mb-4">
                        <input placeholder="" type="text" class="input" id="firstname">
                        <label class="iLabel" for="firstname">نام</label>
                    </div>

                    <div class="input-container mb-4">
                        <input placeholder="" type="text" class="input" id="lastname">
                        <label class="iLabel" for="lastname">نام خانوادگی</label>
                    </div>
                    <div class="input-container mb-4">
                        <input placeholder="" type="text" class="input" id="email">
                        <label class="iLabel" for="email">ایمیل</label>
                    </div>
                    <button class="primary-btn" type="text">ثبت نام</button>
                </div>
                <hr>
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    چک باکس
                </label>
                <hr>
                <div class="radio-container">
                    <div class="radio-wrapper">
                        <label class="radio-button">
                            <input id="option1" name="radio-group" type="radio">
                            <span class="radio-checkmark"></span>
                            <span class="radio-label">Male</span>
                        </label>
                    </div>

                    <div class="radio-wrapper">
                        <label class="radio-button">
                            <input id="option2" name="radio-group" type="radio">
                            <span class="radio-checkmark"></span>
                            <span class="radio-label">Female</span>
                        </label>
                    </div>

                    <div class="radio-wrapper">
                        <label class="radio-button">
                            <input id="option3" name="radio-group" type="radio">
                            <span class="radio-checkmark"></span>
                            <span class="radio-label">Other</span>
                        </label>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>
<style>
    .mhmd {
        background-color: #0056b3;
        color: #fff;
        border: none;
    }
</style>
@endsection