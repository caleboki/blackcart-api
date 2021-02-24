<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'platform' => 'shopify',
        ]);

        DB::table('stores')->insert([
            'platform' => 'woocommerce',
        ]);
    }
}
