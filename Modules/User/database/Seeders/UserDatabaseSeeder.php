<?php

namespace Modules\User\database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'mohammad khoshgoftar',
            'mobile' => '09022576907',
            'email' => 'mohammadkhoshgoftar5850@gmail.com',
            'password' => '09022576907',
        ]);
        $user = User::query()->find(1);
        $user->assignRole('superAdmin');
    }
}
