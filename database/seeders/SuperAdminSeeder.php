<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'superAdmin@superAdmin.fr',
            'password' => Hash::make('superAdmin'),
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin user
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.fr',
            'password' => Hash::make('admin'),
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager user

        $productManager = User::create([
            'name' => 'Product Manager',
            'email' => 'productManager@product.fr',
            'password' => Hash::make('productManager'),
        ]);
        $productManager->assignRole('Product Manager');
    }
}
