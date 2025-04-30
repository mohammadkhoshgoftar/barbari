@extends('core::layouts.master')
@section('content')
    <main class="adminuiux-content has-sidebar" onclick="contentClick()">
        <div class="container-fluid mt-2">
            <div class="bg-theme-1-subtle rounded px-2 py-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item bi"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active bi" aria-current="page">Personalize</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container mt-3" id="main-content">
            <div class="container mt-3">
                <div class="card-header">
                    <div class="row gx-3 align-items-center">
                        <div class="col"><p class="h6">در این قسمت میتوانید دسترسی های افراد را به روزرسانی کنید</p></div>
                    </div>
                </div>
                <div class="card adminuiux-card mb-3">
                    <div class="card-body">

                        <h1>Role-Permission Management</h1>
                        <form id="role-permission-form" action="{{route('admin.permission.sync')}}" type="post">
                            @csrf
                            <table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
                                <thead>
                                <tr>
                                    <th>Module \ Permissions</th>
                                    @foreach($roles as $role)
                                        <th>{{ $role->name }}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($modulePermissions as $module => $permissions)
                                    <!-- نمایش نام ماژول -->
                                    <tr>
                                        <td colspan="{{ count($roles) + 1 }}" style="text-align: left; font-weight: bold; background-color: #f0f0f0;">
                                            {{ ucfirst($module) }}
                                        </td>
                                    </tr>
                                    <!-- نمایش دسترسی‌های ماژول -->
                                    @foreach($permissions as $permission)
                                        <tr>
                                            <td>{{ str_replace('-', ' ', $permission) }}</td>
                                            @foreach($roles as $role)
                                                <td>
                                                    <input type="checkbox"
                                                           name="permissions[{{ $role->name }}][]"
                                                           value="{{ $permission }}"
                                                           class="form-check-input"
                                                            {{ $role->permissions->pluck('name')->contains($permission) ? 'checked' : '' }}>
                                                </td>

                                            @endforeach
                                        </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                            <br>
                            <button type="submit" id="submit-btn">به روزرسانی</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection