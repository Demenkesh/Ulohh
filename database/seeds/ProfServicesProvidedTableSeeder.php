<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfServicesProvidedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prof_services_provided')->insert([
            [
                'user_id' => 101,
                'prof_services_id' => 'service_001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 102,
                'prof_services_id' => 'service_002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 103,
                'prof_services_id' => 'service_003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
