<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_category')->insert([
            ['name' => 'Health'],
            ['name' => 'Education'],
            ['name' => 'Transportation'],
            ['name' => 'Technology'],
            ['name' => 'Consulting'],
            ['name' => 'Entertainment'],
            ['name' => 'Finance'],
            ['name' => 'Real Estate'],
            ['name' => 'Manufacturing'],
            ['name' => 'Retail'],
        ]);
    }
}
