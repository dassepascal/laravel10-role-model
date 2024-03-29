<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-product',
            'edit-product',
            'delete-product',
            'create-option',
            'edit-option',
            'delete-option',
         ];
         // Looping and Inserting Array's Permissions into Permission Table
            foreach ($permissions as $permission) {
                \Spatie\Permission\Models\Permission::create(['name' => $permission]);
            }
    }
}
