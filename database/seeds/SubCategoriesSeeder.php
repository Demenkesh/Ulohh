<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = [
            ['cat_id' => 1, 'name' => 'Smartphones', 'sub_cat_id' => null],
            ['cat_id' => 1, 'name' => 'Laptops', 'sub_cat_id' => null],
            ['cat_id' => 2, 'name' => 'Sofas', 'sub_cat_id' => null],
            ['cat_id' => 2, 'name' => 'Chairs', 'sub_cat_id' => null],
            ['cat_id' => 3, 'name' => 'Men\'s Clothing', 'sub_cat_id' => null],
            ['cat_id' => 3, 'name' => 'Women\'s Clothing', 'sub_cat_id' => null],
            ['cat_id' => 4, 'name' => 'Fiction', 'sub_cat_id' => null],
            ['cat_id' => 4, 'name' => 'Non-fiction', 'sub_cat_id' => null],
            // Add more subcategories as needed
        ];

        DB::table('sub_categories')->insert($subCategories);
    }
}
