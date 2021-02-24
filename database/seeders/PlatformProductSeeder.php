<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_store')->insert([
            'store_id' => rand(1, 2),
            'product_id' => 2
        ]);

        DB::table('product_store')->insert([
            'store_id' => rand(1, 2),
            'product_id' => 1
        ]);

        DB::table('product_store')->insert([
            'store_id' => rand(1, 2),
            'product_id' => 3
        ]);
    }
}
