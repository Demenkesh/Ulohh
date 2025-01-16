<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'cat_serv_id' => 1,
                'name' => 'Web Development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cat_serv_id' => 2,
                'name' => 'App Development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cat_serv_id' => 3,
                'name' => 'Graphic Design',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cat_serv_id' => 4,
                'name' => 'Digital Marketing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more services as needed
        ];

        DB::table('services')->insert($services);
    }
}
