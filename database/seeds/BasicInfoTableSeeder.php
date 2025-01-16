<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasicInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('basic_info')->insert([
            [
                'user_id' => 'user_001',
                'prof_service_id' => 'service_001',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'company_name' => 'Doe Enterprises',
                'company_type' => 1,
                'address_1' => '123 Main Street',
                'address_2' => 'Suite 456',
                'city' => 'Los Angeles',
                'state' => 'California',
                'country' => 'USA',
                'phone' => '1234567890',
                'services_id' => 101,
                'basic_infos_id' => 202,
                'website' => 'https://doeenterprises.com',
                'bus_description' => 'Business consultancy services.',
                'cert_and_award' => 'Best Consultant Award',
                'cost_from' => '1000',
                'cost_to' => '5000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 'user_002',
                'prof_service_id' => 'service_002',
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'company_name' => 'Smith Solutions',
                'company_type' => 2,
                'address_1' => '456 Elm Street',
                'address_2' => null,
                'city' => 'New York',
                'state' => 'New York',
                'country' => 'USA',
                'phone' => '0987654321',
                'services_id' => 102,
                'basic_infos_id' => 203,
                'website' => 'https://smithsolutions.com',
                'bus_description' => 'IT consulting and development.',
                'cert_and_award' => 'Top Innovator 2023',
                'cost_from' => '5000',
                'cost_to' => '15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
