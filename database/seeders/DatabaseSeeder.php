<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Brand\database\seeders\BrandDatabaseSeeder;
use Modules\Category\database\seeders\CategoryDatabaseSeeder;
use Modules\Permission\Database\Seeders\PermissionDatabaseSeeder;
use Modules\User\database\Seeders\UserDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            PermissionDatabaseSeeder::class,
            UserDatabaseSeeder::class,
        ]);
    }
}
