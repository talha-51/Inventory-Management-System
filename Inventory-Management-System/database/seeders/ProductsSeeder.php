<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'name' => 'TV',
                'quantity' => 10,
                'price' => 500000,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'AC',
                'quantity' => 5,
                'price' => 1000000,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Phone',
                'quantity' => 20,
                'price' => 350000,
            ]
        );
    }
}
