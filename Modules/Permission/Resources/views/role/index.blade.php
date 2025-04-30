@extends('core::layouts.master')

@section('content')
    <main class="adminuiux-content has-sidebar" onclick="contentClick()">
        <div class="container-fluid mt-2">
            <div class="bg-theme-1-subtle rounded px-2 py-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                        <i class="fa fa-angle-left"></i>
                        <li class="breadcrumb-item bi"><a href="javascript:void(0)">نقش ها</a></li>                    </ol>
                </nav>
            </div>
        </div>
        <div class="container mt-3" id="main-content">
            <div class="align-items-center card d-flex flex-row mb-3 gap-2 p-2 rounded-4">
                <div class="bg-teal text-white px-3 py-1 rounded">
                    <i class="fas fa-info"></i>
                </div>
                <h6>در این قسمت میتوانید همه نقش ها را مشاهده کنید</h6>
            </div>
            <div class="card adminuiux-card mb-3">
                @php
                    $data = [
                                ['label'=>'شناسه','name' => 'ID', 'data' => 'id'],
                                ['label'=>'عنوان','name' => 'name', 'data' => 'name'],
                                ['label'=>'فعالیت','name' => 'Actions', 'data' => 'action', 'orderable' => false]
                            ];
                    $route = route('admin.role.data');
                @endphp
                <div class="card-body">
                    <x-data-table-component
                            :route="$route"
                            :columns="$data"
                    />
                </div>
            </div>
        </div>
    </main>
@endsection