@extends('core::layouts.master')

@section('content')
<main class="adminuiux-content has-sidebar" onclick="contentClick()">
    <div class="container-fluid mt-2">
        <div class="bg-theme-1-subtle rounded px-2 py-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item bi"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                    <i class="fa fa-angle-left"></i>
                    <li class="breadcrumb-item bi"><a href="javascript:void(0)">بارنامه ها</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container w-100 mt-3" id="main-content">
        <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
            <div class="bg-teal text-white px-3 py-1 rounded">
                <i class="fas fa-info"></i>
            </div>
            <h6>در این قسمت میتوانید بارنامه ها را مشاهده کنید</h6>
        </div>
        <div class="card adminuiux-card mb-3">
            @php
            $data = [
            ['label'=>'شماره','name' => 'waybill_number', 'data' => 'waybill_number'],
            ['label'=>'فرستنده','name' => 'sender_name', 'data' => 'sender_name'],
            ['label'=>'گیرنده','name' => 'receiver_name', 'data' => 'receiver_name'],
            ['label'=>'مبدا','name' => 'loading_origin', 'data' => 'loading_origin'],
            ['label'=>'مقصد','name' => 'unloading_destination', 'data' => 'unloading_destination'],
            ['label'=>'راننده','name' => 'drivers', 'data' => 'drivers'],
            ['label'=>'تاریخ','name' => 'waybill_date', 'data' => 'waybill_date'],
            ['label'=>'ساعت','name' => 'waybill_time', 'data' => 'waybill_time'],
            ['label'=>'فعالیت','name' => 'action', 'data' => 'action','orderable' => false]
            ];
            $route = route('admin.bol.data');
            @endphp
            <div class="card-body">
                <x-data-table-component
                    :route="$route"
                    :columns="$data"
                    :table="1" />
            </div>
        </div>
    </div>
</main>
@endsection