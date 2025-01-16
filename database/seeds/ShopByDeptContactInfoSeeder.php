<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopByDeptContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_by_dept_contact_info')->insert([
            [
                'email' => 'customer1@example.com',
                'transaction_id' => 'TX123456789',
                'full_name' => 'John Doe',
                'address_1' => '123 Main St, City',
                'address_2' => 'Apt 4B',
                'phone' => '+1234567890',
                'state' => 'California',
            ],
            [
                'email' => 'customer2@example.com',
                'transaction_id' => 'TX123456790',
                'full_name' => 'Jane Smith',
                'address_1' => '456 Oak Ave, Town',
                'address_2' => '',
                'phone' => '+1234567891',
                'state' => 'Texas',
            ],
            [
                'email' => 'customer3@example.com',
                'transaction_id' => 'TX123456791',
                'full_name' => 'Alice Johnson',
                'address_1' => '789 Pine Rd, Village',
                'address_2' => 'Unit 1A',
                'phone' => '+1234567892',
                'state' => 'Florida',
            ],
            [
                'email' => 'customer4@example.com',
                'transaction_id' => 'TX123456792',
                'full_name' => 'Bob Brown',
                'address_1' => '321 Elm St, City',
                'address_2' => 'Suite 5C',
                'phone' => '+1234567893',
                'state' => 'New York',
            ],
            [
                'email' => 'customer5@example.com',
                'transaction_id' => 'TX123456793',
                'full_name' => 'Charlie Davis',
                'address_1' => '654 Maple Dr, Suburb',
                'address_2' => 'Floor 2',
                'phone' => '+1234567894',
                'state' => 'Nevada',
            ],
        ]);
    }
}
