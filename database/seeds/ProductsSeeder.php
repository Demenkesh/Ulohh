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
        $products = [
            [
                'product_id' => 'P001',
                'cat_id' => 1,
                'sub_cat_id' => 1,
                'product_name' => 'Smartphone X',
                'price' => 20000,
                'description' => 'A high-end smartphone with excellent features.',
                'color' => 'Black',
                'size' => '6.5 inches',
                'model' => 'X1',
                'img_path' => 'images/smartphone_x.jpg',
                'thumbnail_path' => 'images/smartphone_x_thumb.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P002',
                'cat_id' => 1,
                'sub_cat_id' => 2,
                'product_name' => 'Laptop Pro',
                'price' => 50000,
                'description' => 'A powerful laptop with great performance for professionals.',
                'color' => 'Silver',
                'size' => '15 inches',
                'model' => 'ProX',
                'img_path' => 'images/laptop_pro.jpg',
                'thumbnail_path' => 'images/laptop_pro_thumb.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 'P003',
                'cat_id' => 2,
                'sub_cat_id' => 3,
                'product_name' => 'Sofa Comfort',
                'price' => 12000,
                'description' => 'A comfortable sofa for your living room.',
                'color' => 'Gray',
                'size' => '3-Seater',
                'model' => 'Sofa1',
                'img_path' => 'images/sofa_comfort.jpg',
                'thumbnail_path' => 'images/sofa_comfort_thumb.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more products as needed
        ];

        DB::table('products')->insert($products);
    }
}
