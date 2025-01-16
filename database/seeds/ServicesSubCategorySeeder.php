<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_sub_categories')->insert([
            [
                'sub_id' => 'sub_id_1',
                'cat_id' => 12,
                'name' => 'Sub Category 1',
            ],
            [
                'sub_id' => 'sub_id_2',
                'cat_id' => 12,
                'name' => 'Sub Category 2',
            ],
            [
                'sub_id' => 'sub_id_3',
                'cat_id' => 12,
                'name' => 'Sub Category 3',
            ],
            [
                'sub_id' => 'sub_id_4',
                'cat_id' => 12,
                'name' => 'Sub Category 4',
            ],
            [
                'sub_id' => 'sub_id_5',
                'cat_id' => 12,
                'name' => 'Sub Category 5',
            ],
        ]);
    }
}
