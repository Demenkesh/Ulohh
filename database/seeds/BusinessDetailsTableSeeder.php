<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_details')->insert([
            [
                'user_id' => 101,
                'services_id' => 201,
                'basic_infos_id' => 301,
                'website' => 'https://example.com',
                'bus_description' => 'Business providing quality services.',
                'cert_and_award' => 'Best Service Provider 2023',
                'cost_from' => '500',
                'cost_to' => '1500',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 102,
                'services_id' => 202,
                'basic_infos_id' => 302,
                'website' => 'https://anotherexample.com',
                'bus_description' => 'Expert in technology and innovation.',
                'cert_and_award' => 'Innovation Award 2022',
                'cost_from' => '1000',
                'cost_to' => '5000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 103,
                'services_id' => 203,
                'basic_infos_id' => 303,
                'website' => 'https://thirdexample.com',
                'bus_description' => 'Leading company in manufacturing.',
                'cert_and_award' => 'Top Manufacturer 2021',
                'cost_from' => '200',
                'cost_to' => '800',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
