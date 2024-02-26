<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Option;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            SuperAdminSeeder::class,
            OptionSeeder::class,
            ProductSeeder::class,

        ]);

        // Option::factory(10)->create();

        // $ids = range(1, 10);
        // Product::factory(10)->create()->each(function ($product) use ($ids) {
        //     shuffle($ids);
        //     $product->options()->attach(array_rand($ids, 3));
        // });

    }
}
