<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_type')->insert([
            [
                'name' => 'Technology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Manufacturing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Healthcare',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Education',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Retail',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
