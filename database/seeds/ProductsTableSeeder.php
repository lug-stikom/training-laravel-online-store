<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'sku' => mt_rand(11111, 99999),
                'name' => 'Frozen Beef Meat',
                'unit_price' => 200000,
                'stock' => 10,
                'description' => 'Daging sapi beku',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'sku' => mt_rand(11111, 99999),
                'name' => 'Frozen Chicken Meat',
                'unit_price' => 100000,
                'stock' => 20,
                'description' => 'Daging ayam beku',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'sku' => mt_rand(11111, 99999),
                'name' => 'Arabica Coffee Bean',
                'unit_price' => 55000,
                'stock' => 5,
                'description' => 'Biji kopi arabica',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'sku' => mt_rand(11111, 99999),
                'name' => 'Java Coffee Bean',
                'unit_price' => 50000,
                'stock' => 15,
                'description' => 'Biji kopi java',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
