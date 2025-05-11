@extends('core::layouts.master')
@section('content')
<main class="adminuiux-content has-sidebar" onclick="contentClick()">
    <div class="container-fluid mt-2">
        <div class="bg-theme-1-subtle rounded px-2 py-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item bi"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                    <i class="fa fa-angle-left"></i>
                    <li class="breadcrumb-item bi"><a href="{{ route('admin.bols') }}">بارنامه ها</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container mt-3" id="main-content">
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header">
                <div class="row gx-3 align-items-center">
                    <div class="col">
                        <p class="h6"> در این قسمت میتوانید اطلاعات بارنامه
                            <span class="badge badge-light text-bg-dark">{{ $item->title}}</span>
                            را ویرایش کنید
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card rounded-4">
            <div class="card-body">
                <form action="{{ route('admin.bol.update',['id'=> $item->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-12">
                            <h5 class="mt-4">اطلاعات فرستنده</h5>
                            <hr/>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="sender_name">نام فرستنده</label>
                            <input type="text" name="sender_name" id="sender_name" class="form-control" placeholder="نام فرستنده" value="{{ old('sender_name', $item->sender_name) }}">
                            @error('sender_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="sender_national_code">کد ملی فرستنده</label>
                            <input type="number" name="sender_national_code" id="sender_national_code" class="form-control" placeholder="کد ملی" value="{{ old('sender_national_code', $item->sender_national_code) }}">
                            @error('sender_national_code')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="sender_postal_code">کد پستی فرستنده</label>
                            <input type="number" name="sender_postal_code" id="sender_postal_code" class="form-control" placeholder="کد پستی" value="{{ old('sender_postal_code', $item->sender_postal_code) }}">
                            @error('sender_postal_code')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
{{--                        <div class="mb-3 col-lg-6">--}}
{{--                            <label class="mb-2" for="sender_address">آدرس فرستنده</label>--}}
{{--                            <textarea name="sender_address" id="sender_address" class="form-control" placeholder="آدرس فرستنده">{{ old('sender_address', $item->sender_address) }}</textarea>--}}
{{--                            @error('sender_address')<span class="text-danger">{{ $message }}</span>@enderror--}}
{{--                        </div>--}}

                        <div class="col-12">
                            <h5 class="mt-4">اطلاعات گیرنده</h5>
                            <hr/>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="receiver_name">نام گیرنده</label>
                            <input type="text" name="receiver_name" id="receiver_name" class="form-control" placeholder="نام گیرنده" value="{{ old('receiver_name', $item->receiver_name) }}">
                            @error('receiver_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="receiver_national_code">کد ملی گیرنده</label>
                            <input type="number" name="receiver_national_code" id="receiver_national_code" class="form-control" placeholder="کد ملی" value="{{ old('receiver_national_code', $item->receiver_national_code) }}">
                            @error('receiver_national_code')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="receiver_postal_code">کد پستی گیرنده</label>
                            <input type="number" name="receiver_postal_code" id="receiver_postal_code" class="form-control" placeholder="کد پستی" value="{{ old('receiver_postal_code', $item->receiver_postal_code) }}">
                            @error('receiver_postal_code')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
{{--                        <div class="mb-3 col-lg-6">--}}
{{--                            <label class="mb-2" for="receiver_address">آدرس گیرنده</label>--}}
{{--                            <textarea name="receiver_address" id="receiver_address" class="form-control" placeholder="آدرس گیرنده">{{ old('receiver_address', $item->receiver_address) }}</textarea>--}}
{{--                            @error('receiver_address')<span class="text-danger">{{ $message }}</span>@enderror--}}
{{--                        </div>--}}

                        <div class="col-12">
                            <h5 class="mt-4">اطلاعات بارنامه</h5>
                            <hr/>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <x-persian-datepicker id="waybill_date" name="waybill_date" inputClass="form-control" label="تاریخ بارنامه"
                                                  placeholder="تاریخ بارنامه"
                                                  options="{observer: true, format: 'YYYY/MM/DD', altField: '.observer-example-alt'}"
                                                  value="{{ old('waybill_date', $item->waybill_date) }}" />
                            @error('waybill_date')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="waybill_time">ساعت بارنامه</label>
                            <input type="time" name="waybill_time" id="waybill_time" class="form-control" value="{{ old('waybill_time', \Carbon\Carbon::parse($item->waybill_time)->format('H:i')) }}">
                            @error('waybill_time')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-12">
                            <h5 class="mt-4">اطلاعات بیمه</h5>
                            <hr/>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="insurance_contract_number">شماره قرارداد بیمه</label>
                            <input type="text" name="insurance_contract_number" id="insurance_contract_number" class="form-control" placeholder="شماره قرارداد بیمه" value="{{ old('insurance_contract_number', $item->insurance_contract_number) }}">
                            @error('insurance_contract_number')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="insurance_company_name">نام شرکت بیمه</label>
                            <input type="text" name="insurance_company_name" id="insurance_company_name" class="form-control" placeholder="نام شرکت بیمه" value="{{ old('insurance_company_name', $item->insurance_company_name) }}">
                            @error('insurance_company_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="insurance_value">ارزش بیمه</label>
                            <input type="text" name="insurance_value" id="insurance_value" class="form-control" placeholder="ارزش بیمه" value="{{ old('insurance_value', $item->insurance_value) }}">
                            @error('insurance_value')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-12">
                            <h5 class="mt-4">اطلاعات مبدا و مقصد</h5>
                            <hr/>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="loading_origin">مبدا بارگیری</label>
                            <input type="text" name="loading_origin" id="loading_origin" class="form-control" placeholder="مبدا بارگیری" value="{{ old('loading_origin', $item->loading_origin) }}">
                            @error('loading_origin')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="mb-2" for="unloading_destination">مقصد تخلیه</label>
                            <input type="text" name="unloading_destination" id="unloading_destination" class="form-control" placeholder="مقصد تخلیه" value="{{ old('unloading_destination', $item->unloading_destination) }}">
                            @error('unloading_destination')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="col-12">
                            <h5 class="mt-4">اطلاعات راننده</h5>
                            <hr/>
                        </div>
                        @php
                            $driver = $item->drivers[0] ?? null;
                        @endphp
                        <div class="mb-3 col-lg-4">
                            <input type="text" name="drivers[0][driver_name]" class="form-control" placeholder="نام راننده" value="{{ old('drivers.0.driver_name', $driver['driver_name']) }}">
                            @error('drivers.0.driver_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-4">
                            <input type="number" name="drivers[0][driver_national_code]" class="form-control" placeholder="کد ملی راننده" value="{{ old('drivers.0.driver_national_code', $driver['driver_national_code']) }}">
                            @error('drivers.0.driver_national_code')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-4">
                            <input type="tel" name="drivers[0][driver_mobile]" class="form-control" placeholder="موبایل راننده" value="{{ old('drivers.0.driver_mobile', $driver['driver_mobile']) }}">
                            @error('drivers.0.driver_mobile')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-4">
                            <input type="text" name="drivers[0][fleet_card_number]" class="form-control" placeholder="کارت ناوگان" value="{{ old('drivers.0.fleet_card_number', $driver['fleet_card_number']) }}">
                            @error('drivers.0.fleet_card_number')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-4">
                            <input type="text" name="drivers[0][fleet_plate]" class="form-control" placeholder="پلاک ناوگان" value="{{ old('drivers.0.fleet_plate', $driver['fleet_plate']) }}">
                            @error('drivers.0.fleet_plate')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-4">
                            <input type="number" name="drivers[0][driver_license_number]" class="form-control" placeholder="شماره گواهینامه" value="{{ old('drivers.0.driver_license_number', $driver['driver_license_number']) }}">
                            @error('drivers.0.driver_license_number')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
{{--                        <div class="mb-3 col-lg-4">--}}
{{--                            <input type="number" name="drivers[0][worker_insurance_number]" class="form-control" placeholder="شماره بیمه راننده" value="{{ old('drivers.0.worker_insurance_number', $driver['worker_insurance_number']) }}">--}}
{{--                            @error('drivers.0.worker_insurance_number')<span class="text-danger">{{ $message }}</span>@enderror--}}
{{--                        </div>--}}
{{--                        <div class="mb-3 col-lg-4">--}}
{{--                            <input type="number" name="drivers[0][driver_insurance_number]" class="form-control" placeholder="شماره بیمه بارگیر" value="{{ old('drivers.0.driver_insurance_number', $driver['driver_insurance_number']) }}">--}}
{{--                            @error('drivers.0.driver_insurance_number')<span class="text-danger">{{ $message }}</span>@enderror--}}
{{--                        </div>--}}

                        <div class="col-12">
                            <h5 class="mt-4">اطلاعات محموله</h5>
                            <hr/>
                        </div>
                        @php
                            $cargo = $item->cargos[0] ?? null;
                        @endphp
                        <div class="mb-3 col-lg-4">
                            <input type="text" name="cargos[0][cargo_name]" class="form-control" placeholder="نام محموله" value="{{ old('cargos.0.cargo_name', $cargo['cargo_name']) }}">
                            @error('cargos.0.cargo_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-4">
                            <input type="number" name="cargos[0][cargo_weight]" class="form-control" placeholder="وزن محموله" value="{{ old('cargos.0.cargo_weight', $cargo['cargo_weight']) }}">
                            @error('cargos.0.cargo_weight')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-2">
                            <input type="number" name="cargos[0][cargo_quantity]" class="form-control" placeholder="تعداد" value="{{ old('cargos.0.cargo_quantity', $cargo['cargo_quantity']) }}">
                            @error('cargos.0.cargo_quantity')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-2">
                            <input type="text" name="cargos[0][cargo_packaging]" class="form-control" placeholder="نوع بسته‌بندی" value="{{ old('cargos.0.cargo_packaging', $cargo['cargo_packaging']) }}">
                            @error('cargos.0.cargo_packaging')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>


                        <div class="col-12">
                            <h5 class="mt-4">هزینه باربری</h5>
                            <hr/>
                        </div>
                        <div class="mb-3 col-lg-4">
                            <input type="text" name="rent_cost" id="rent_cost" class="form-control" placeholder="کرایه حمل و نقل" value="{{ old('rent_cost', number_format($item->rent_cost)) }}">
                            @error('rent_cost')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 col-lg-4">
                            <input type="text" name="labor_cost" id="labor_cost" class="form-control" placeholder="کارگری" value="{{ old('labor_cost', number_format($item->labor_cost)) }}">
                            @error('labor_cost')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-3 col-12 text-start">
                            <button type="submit" class="btn btn-theme">
                                <i class="fal fa-edit"></i>
                                ویرایش و چاپ بارنامه
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

        const priceInput2 = document.getElementById('rent_cost');
        priceInput2.addEventListener('input', function () {
            let rawValue = this.value.replace(/,/g, '').replace(/[^0-9]/g, '');
            let formattedValue = rawValue.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            this.value = formattedValue;
        });

        const priceInput3 = document.getElementById('labor_cost');
        priceInput3.addEventListener('input', function () {
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