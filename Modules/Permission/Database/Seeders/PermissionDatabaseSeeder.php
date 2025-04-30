<?php

namespace Modules\Permission\Database\Seeders;

use Modules\Permission\app\Http\Controllers\PermissionController;
use Modules\Permission\app\Repository\PermissionRepository;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class PermissionDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'superAdmin',
            'guard_name' => 'web',
        ]);
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
        Role::create([
            'name' => 'user',
            'guard_name' => 'web',
        ]);
        $repository = new PermissionRepository();
        $seedPermission =  new PermissionController($repository);
        $seedPermission->storePermissions();
    }
}
