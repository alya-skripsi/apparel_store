<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Wanita',
            'slug' => 'wanita',
        ]);
        Category::create([
            'name' => 'Pria',
            'slug' => 'pria',
        ]);
        Category::create([
            'name' => 'Alas Kaki',
            'slug' => 'alas-kaki',
        ]);

        Product::factory(10)->create();
        Order::factory(10)->create();
    }
}
