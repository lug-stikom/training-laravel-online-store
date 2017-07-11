<?php

use Illuminate\Database\Seeder;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_product')->insert([
            [
                'category_id' => DB::table('categories')->where('name', 'Makanan')->first()->id,
                'product_id' => DB::table('products')->where('name', 'Frozen Beef Meat')->first()->id,
            ],
            [
                'category_id' => DB::table('categories')->where('name', 'Makanan')->first()->id,
                'product_id' => DB::table('products')->where('name', 'Frozen Chicken Meat')->first()->id,
            ],
            [
                'category_id' => DB::table('categories')->where('name', 'Minuman')->first()->id,
                'product_id' => DB::table('products')->where('name', 'Arabica Coffee Bean')->first()->id,
            ],
            [
                'category_id' => DB::table('categories')->where('name', 'Minuman')->first()->id,
                'product_id' => DB::table('products')->where('name', 'Java Coffee Bean')->first()->id,
            ]
        ]);
    }
}
