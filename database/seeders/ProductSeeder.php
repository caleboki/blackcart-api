<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'God of War',
            'price_usd' => 14.99,
            'price_cad' => 18.90,
            'availability' => 'in-stock',
            'size' => 3,
            'colour' => 'black',
            'weight' => 3
        ]);

        DB::table('products')->insert([
            'name' => 'Wireless Gaming Headset',
            'price_usd' => 14.99,
            'price_cad' => 18.90,
            'availability' => 'in-stock',
            'size' => 3,
            'colour' => 'white',
            'weight' => 5
        ]);

        DB::table('products')->insert([
            'name' => 'External Hard Drive',
            'price_usd' => 140.99,
            'price_cad' => 180.90,
            'availability' => 'in-stock',
            'size' => 4,
            'colour' => 'black',
            'weight' => 30
        ]);
    }
}
