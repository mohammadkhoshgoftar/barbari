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
                        <li class="breadcrumb-item bi"><a href="javascript:void(0)">ویرایش کاربر</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container mt-3" id="main-content">
            <ul class="nav nav-tabs border-0 p-05" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="user-dashboard-tab" data-bs-toggle="tab"
                            data-bs-target="#user-dashboard-information"
                            type="button" role="tab" aria-controls="user-dashboard-information" aria-selected="true">
                        داشبورد
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="user-tab" data-bs-toggle="tab"
                            data-bs-target="#user-information"
                            type="button" role="tab" aria-controls="user-information" aria-selected="true">اطلاعات کاربر
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="change-password-tab" data-bs-toggle="tab"
                            data-bs-target="#change-password-user"
                            type="button" role="tab" aria-controls="change-password-user" aria-selected="false">تغییر
                        رمز
                        عبور
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="payment-tab" data-bs-toggle="tab"
                            data-bs-target="#payment-user"
                            type="button" role="tab" aria-controls="payment-user" aria-selected="false">پرداختی
                        ها
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="factor-rental-tab" data-bs-toggle="tab"
                            data-bs-target="#factor-rental-user"
                            type="button" role="tab" aria-controls="factor-rental-user" aria-selected="false">
                        فاکتورها اجاره
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="factor-sale-tab" data-bs-toggle="tab"
                            data-bs-target="#factor-sale-user"
                            type="button" role="tab" aria-controls="factor-sale-user" aria-selected="false">
                         فاکتورها فروش
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="initial_debt-tab" data-bs-toggle="tab"
                            data-bs-target="#initial_debt-user"
                            type="button" role="tab" aria-controls="initial_debt-user" aria-selected="false">
                        میزان بدهی اولیه
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="user-dashboard-information" role="tabpanel"
                     aria-labelledby="user-dashboard-tab"
                     tabindex="0">
                    <br>
                    <div class="card adminuiux-card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <div class="card rounded-4">
                                        <div class="card-body text-center">
                                            <a class="text-decoration-none d-flex flex-column">
                                                <div class="avatar avatar-40 rounded mb-3">
                                                    <i class="fa-thin fa-file-invoice"></i>
                                                </div>
                                                <div class="d-flex py-1 gap-2 align-items-center justify-content-center bg-light-teal rounded">
                                                    <p class="h4 mb-0"> {!! $factorCount !!}
                                                    </p>
                                                    <p class="small">تعداد فاکتورها</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <div class="card rounded-4">
                                        <div class="card-body text-center">
                                            <a
                                                    class="text-decoration-none d-flex flex-column">
                                                <div class="avatar avatar-40 rounded mb-3">
                                                    <i class="fa-thin fa-money-check-alt"></i>
                                                </div>
                                                <div class="d-flex py-1 gap-2 align-items-center justify-content-center bg-light-teal rounded">
                                                    <p class="h4 mb-0"> {!! $paymentCount !!}
                                                    </p>
                                                    <p class="small">تعداد پرداختی ها</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <div class="card rounded-4">
                                        <div class="card-body text-center">
                                            <a
                                                    class="text-decoration-none d-flex flex-column">
                                                <div class="avatar avatar-40 rounded mb-3">
                                                    <i class="fa-thin fa-money-bill-wave"></i>
                                                </div>
                                                <div class="d-flex py-1 gap-2 align-items-center justify-content-center bg-light-teal rounded">
                                                    <p class="h4 mb-0"> {!! number_format($amountPaid) !!}
                                                    </p>
                                                    <p class="small">کل مبلغ پرداخت شده</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <div class="card rounded-4">
                                        <div class="card-body text-center">
                                            <a
                                                    class="text-decoration-none d-flex flex-column">
                                                <div class="avatar avatar-40 rounded mb-3">
                                                    <i class="fa-thin fa-calculator"></i>
                                                </div>
                                                <div class="d-flex py-1 gap-2 align-items-center justify-content-center bg-light-teal rounded">
                                                    <p class="h4 mb-0"> {!! number_format($totalBalance) !!}
                                                    </p>
                                                    <p class="small">کل مبلغ فاکتور</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <div class="card rounded-4">
                                        <div class="card-body text-center">
                                            <a
                                                    class="text-decoration-none d-flex flex-column">
                                                <div class="avatar avatar-40 rounded mb-3">
                                                    <i class="fa-thin fa-percent"></i>
                                                </div>
                                                <div class="d-flex py-1 gap-2 align-items-center justify-content-center bg-light-teal rounded">
                                                    <p class="h4 mb-0"> {!! number_format($discountReceived) !!}
                                                    </p>
                                                    <p class="small">کل تخفیف های داده شده</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <div class="card rounded-4">
                                        <div class="card-body text-center">
                                            <a
                                                    class="text-decoration-none d-flex flex-column">
                                                <div class="avatar avatar-40 rounded mb-3">
                                                    <i class="fa-thin fa-hand-holding-usd"></i>
                                                </div>
                                                <div class="d-flex py-1 gap-2 align-items-center justify-content-center bg-light-teal rounded">
                                                    <p class="h4 mb-0"> {!! number_format($debt) !!}
                                                    </p>
                                                    <p class="small">بدهی ها</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="user-information" role="tabpanel" aria-labelledby="user-tab"
                     tabindex="0">
                    <br>
                    <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
                        <div class="bg-teal text-white px-3 py-1 rounded">
                            <i class="fas fa-info"></i>
                        </div>
                        <h6>در این قسمت میتوانید اطلاعات {{ $item->name }} را ویرایش کنید</h6>
                    </div>
                    <div class="card adminuiux-card mb-3">
                        <div class="card-body">
                            <form action="{{ route('update.user',['id'=>$item->id]) }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="name">نام و نام خانوادگی</label>
                                        <input
                                                name="name"
                                                id="name"
                                                value="{{ $item->name ?? '' }}"
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
                                                value="{{ $item->mobile }}"
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
                                                value="{{ $item->email }}"
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
                                                <option value="{{ $role->id }}" {{ is_array($item->getRoleNames()) ? (key($item->getRoleNames()[0])  == $role->id ? 'selected' : '' ) : ''}}>
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3 col-lg-12 text-start">
                                        <button type="submit" class="btn btn-theme">
                                            <i class="fal fa-edit"></i>
                                            ویرایش کاربر
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="change-password-user" role="tabpanel"
                     aria-labelledby="change-password-tab"
                     tabindex="0">
                    <br>
                    <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
                        <div class="bg-teal text-white px-3 py-1 rounded">
                            <i class="fas fa-info"></i>
                        </div>
                        <h6>در این قسمت میتوانید رمز عبور {{ $item->name }} را تغییر دهید</h6>
                    </div>
                    <div class="card adminuiux-card mb-3">
                        <div class="card-body">
                            <form action="{{ route('changePsw') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$item->id}}">
                                <div class="row">
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
                                            <i class="fal fa-edit"></i>
                                            تغییر رمز عبور
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="payment-user" role="tabpanel"
                     aria-labelledby="payment-tab"
                     tabindex="0">
                    <br>
                    <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
                        <div class="bg-teal text-white px-3 py-1 rounded">
                            <i class="fas fa-info"></i>
                        </div>
                        <h6>در این قسمت میتوانید پرداختی ها {{ $item->name }} را مشاهده کنید</h6>
                    </div>
                    <div class="card adminuiux-card mb-3">
                        @php
                            $data = [
                                        ['label'=>'شناسه','name' => 'id', 'data' => 'id'],
                                        ['label'=>'مبلغ','name' => 'price', 'data' => 'price'],
                                        ['label'=>'تاریخ پرداخت','name' => 'payment_date', 'data' => 'payment_date'],
                                        ['label'=>'فعالیت','name' => 'Actions', 'data' => 'action', 'orderable' => false]
                                    ];
                            $route = route('admin.payment.data.for.user',['id'=>$item->id]);
                        @endphp
                        <div class="card-body">
                            <x-data-table-component
                                    :route="$route"
                                    :columns="$data"
                                    :table="2"
                            />
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="factor-rental-user" role="tabpanel"
                     aria-labelledby="factor-rental-tab"
                     tabindex="0">
                    <br>
                    <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
                        <div class="bg-teal text-white px-3 py-1 rounded">
                            <i class="fas fa-info"></i>
                        </div>
                        <h6>در این قسمت میتوانید فاکتور های اجاره{{ $item->name }} را مشاهده کنید</h6>
                    </div>
                    <div class="card adminuiux-card mb-3">
                        @php
                            $data = [
                                        ['label'=>'شماره فاکتور','name' => 'id', 'data' => 'id'],
                                        ['label'=>'مبلغ فاکتور','name' => 'total_calculated', 'data' => 'total_calculated'],
                                        ['label'=>'تاریخ اجاره','name' => 'delivery_date', 'data' => 'delivery_date'],
                                        ['label'=>'موعدبازگشت','name' => 'due_date', 'data' => 'due_date'],
                                        ['label'=>'تاریخ تاریخ بازگشت','name' => 'return_date', 'data' => 'return_date'],
                                        ['label'=>'فعالیت','name' => 'action', 'data' => 'action','orderable' => false]
                                 ];
                            $route = route('admin.factor.data.for.user',['id'=>$item->id]);
                        @endphp
                        <div class="card-body">
                            <x-data-table-component
                                    :route="$route"
                                    :columns="$data"
                                    :table="1"/>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="factor-sale-user" role="tabpanel"
                     aria-labelledby="factor-sale-tab"
                     tabindex="0">
                    <br>
                    <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
                        <div class="bg-teal text-white px-3 py-1 rounded">
                            <i class="fas fa-info"></i>
                        </div>
                        <h6>در این قسمت میتوانید فاکتور های  فروش{{ $item->name }} را مشاهده کنید</h6>
                    </div>
                    <div class="card adminuiux-card mb-3">
                        @php
                            $data = [
                                        ['label'=>'شماره فاکتور','name' => 'id', 'data' => 'id'],
                                        ['label'=>'مبلغ فاکتور','name' => 'total_calculated', 'data' => 'total_calculated'],
                                        ['label'=>'تاریخ ','name' => 'date', 'data' => 'date'],
                                        ['label'=>'فعالیت','name' => 'action', 'data' => 'action','orderable' => false]
                                 ];
                            $route = route('admin.factor.data.sale.for.user',['id'=>$item->id]);
                        @endphp
                        <div class="card-body">
                            <x-data-table-component
                                    :route="$route"
                                    :columns="$data"
                                    :table="3"/>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="initial_debt-user" role="tabpanel"
                     aria-labelledby="initial_debt-tab"
                     tabindex="0">
                    <br>
                    <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
                        <div class="bg-teal text-white px-3 py-1 rounded">
                            <i class="fas fa-info"></i>
                        </div>
                        <h6>در این قسمت میتوانید میزان بدهی اولیه {{ $item->name }} را اضافه کنید</h6>
                    </div>
                    <div class="card adminuiux-card mb-3">
                        <div class="card-body">
                            <form action="{{ route('admin.add.initial.debt',['id'=>$item->id]) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="initial_debt" class="mb-3">بدهی اولیه کاربر</label>
                                        <input
                                                name="initial_debt"
                                                id="initial_debt"
                                                value="{{ number_format($item->initial_debt) ?? '' }}"
                                                {{ $item->initial_debt != 0 ? 'disabled' : '' }}
                                                placeholder="بدهی اولیه کاربر"
                                                class="form-control"
                                                aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm">
                                    </div>

                                    @if($item->initial_debt == 0 )
                                        <div class="mb-3 col-lg-12 text-start">
                                            <button type="submit" class="btn btn-theme">
                                                <i class="fal fa-save"></i>
                                                ذخیره (بعد از ذخیره کردن امکان حذف و یا ویرایش وجود ندارد)
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>
@endsection
@push('js')
    <script>
        const priceInput = document.getElementById('initial_debt');
        priceInput.addEventListener('input', function () {
            let rawValue = this.value.replace(/,/g, '').replace(/[^0-9]/g, '');
            let formattedValue = rawValue.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            this.value = formattedValue;
        });
    </script>
@endpush