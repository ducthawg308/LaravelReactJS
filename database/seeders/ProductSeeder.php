<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Laptop Dell', 'price' => 1500.00],
            ['name' => 'iPhone 15', 'price' => 1200.00],
            ['name' => 'Samsung Galaxy S24', 'price' => 1100.00],
            ['name' => 'MacBook Pro', 'price' => 2500.00],
            ['name' => 'AirPods Pro', 'price' => 250.00],
        ]);
    }
}
