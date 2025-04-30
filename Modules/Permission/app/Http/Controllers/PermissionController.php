<?php

namespace Modules\Permission\app\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Modules\Permission\app\Http\Requests\AssignPermissionsToRoleRequest;
use Modules\Permission\app\Repository\PermissionRepository;
use Nwidart\Modules\Facades\Module;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    protected PermissionRepository $repository;
    protected string $path;
    public function __construct(PermissionRepository $repository)
    {
        $this->repository = $repository;
        $this->path = 'permission::permission.';
    }

    public function index()
    {
        $roles = Role::with('permissions')->get();
        $modules = Module::all();
        $modulePermissions = [];
        foreach ($modules as $module) {
            $moduleName = strtolower($module->getName());
            $configKey = "{$moduleName}.permissions";
            if (config()->has($configKey)) {
                $modulePermissions[$moduleName] = config($configKey);
            }
        }

        return view($this->path.'index', compact('roles','modulePermissions'));
    }

    public function sync(AssignPermissionsToRoleRequest $request)
    {
        $result = $this->repository->sync($request->validated());
        if ($result) {
            return back()->with('true');
        } else {
            return back()->with('false');
        }
    }

    public function storePermissions(): bool
    {
        return $this->repository->updateToDb();
    }
}
