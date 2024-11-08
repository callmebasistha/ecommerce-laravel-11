<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'guard_name' => 'admin',
                'name' => 'manager'
            ],
            [
                'guard_name' => 'admin',
                'name' => 'staff'
            ],
            [
                'guard_name' => 'admin',
                'name' => 'admin'
            ],
            [
                'name' => 'user'
            ],
        ];

        foreach ($roles as $key => $role) {
            Role::create($role);
        }
    }
}
