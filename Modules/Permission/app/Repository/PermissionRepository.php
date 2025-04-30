<?php

namespace Modules\Permission\app\Repository;

use Illuminate\Http\Response;
use Modules\Permission\app\Http\Resources\PermissionCollection;
use Modules\Permission\app\Interface\PermissionRepositoryInterface;
use Nwidart\Modules\Facades\Module;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionRepository implements PermissionRepositoryInterface
{
    private Permission $permission;

    public function __construct()
    {
        $this->permission = new Permission();
    }

    public function index()
    {
        try {
            $data = $this->permission->get();
            $permissionCollection = new PermissionCollection($data);
            return Response::success(data: $permissionCollection);
        } catch (\Exception $exception) {
            return Response::error($exception->getMessage());
        }
    }

    public function updateToDb(): bool
    {
        try {
            foreach (getModulesName() as $module) {
                if (config(strtolower($module) . '.permissions')) {
                    foreach (config(strtolower($module) . '.permissions') as $item) {
                        if ($this->permission->where('name', $item)->first() == null) {
                            $newPermission = new Permission();
                            $newPermission->name = $item;
                            $newPermission->save();
                        }
                    }
                }
            }
            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function sync($validateData): bool
    {
        try {
            $this->updatePermissions();
            foreach ($validateData['permissions'] as $roleName => $permissions) {
                $role = Role::query()->where('name', $roleName)->first();
                if ($role) {
                    $role->givePermissionTo($permissions);
                }
            }
            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }

    private function updatePermissions(): void
    {
        $modules = Module::all();
        foreach ($modules as $module) {
            $moduleName = strtolower($module->getName());
            $configKey = "{$moduleName}.permissions";
            if (config()->has($configKey)) {
                $permissions = config($configKey);
                foreach ($permissions as $permission) {
                    if (!Permission::query()->where('name', $permission)->exists()) {
                        Permission::create(['name' => $permission]);
                    }
                }
            }
        }
    }
}