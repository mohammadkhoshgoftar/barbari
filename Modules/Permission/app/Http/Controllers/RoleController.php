<?php

namespace Modules\Permission\app\Http\Controllers;

use Modules\Permission\app\Http\Requests\UpdateRoleRequest;
use Modules\Permission\app\Http\Requests\StoreRoleRequest;
use Modules\Permission\app\Repository\RoleRepository;
use Yajra\DataTables\Facades\DataTables;
use Spatie\Permission\Models\Role;
use Illuminate\Routing\Controller;

class RoleController extends Controller
{
    protected RoleRepository $repository;
    private string $path;

    public function __construct(RoleRepository $repository)
    {
        $this->repository = $repository;
        $this->path = 'permission::role.';
    }

    public function index()
    {
        return view($this->path . 'index');
    }

    public function data()
    {
        $roles = Role::query()->select(['id', 'name', 'created_at']);

        return DataTables::eloquent($roles)
            ->addColumn('action', function ($role) {
                return '
                        <div class="dropdown d-inline-block">
                        <a class="btn btn-link no-caret" data-bs-toggle="dropdown">
                                <i class="fa-light fa-gear fs-5"></i>
                                </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="' . route('admin.role.edit', $role->id) . '">
                                <i class="fal fa-pen-to-square"></i>
                                ویرایش
                                </a></li>
                                <li><a class="dropdown-item theme-red" href="javascript:void(0)">
                                <i class="fal fa-trash"></i>
                                حذف
                                </a></li>
                            </ul>
                        </div>';
            })
            ->toJson();
    }

    public function create()
    {
        return view($this->path . 'create');
    }

    public function store(StoreRoleRequest $request)
    {
        $result = $this->repository->storeToDb($request->validated());
        if ($result) {
            return back()->with('true');
        } else {
            return back()->with('false');
        }
    }

    public function show($id)
    {
        return $this->repository->show($id);
    }

    public function edit($id)
    {
        $data = $this->repository->getItemById($id)->first();
        return view($this->path . 'edit', compact('data'));
    }

    public function update(UpdateRoleRequest $request, $id)
    {
        $result = $this->repository->updateToDb($request->validated(), $id);
        if ($result) {
            return back()->with('true');
        } else {
            return back()->with('false');
        }
    }

    public function destroy($id)
    {
        return $this->repository->deleteToDb($id);
    }
}
