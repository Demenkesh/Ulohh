<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GetAQuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('get_a_quote')->insert([
            [
                'email' => 'example1@example.com',
                'full_name' => 'John Doe',
                'phone' => '1234567890',
                'zip_code' => '12345',
                'message' => 'I am interested in getting a quote for your services.',
            ],
            [
                'email' => 'example2@example.com',
                'full_name' => 'Jane Smith',
                'phone' => '9876543210',
                'zip_code' => '54321',
                'message' => 'Can you provide me with a quote for a custom service?',
            ],
            [
                'email' => 'example3@example.com',
                'full_name' => 'Alice Johnson',
                'phone' => '1122334455',
                'zip_code' => '67890',
                'message' => 'Looking for a quote on bulk orders of your product.',
            ],
            [
                'email' => 'example4@example.com',
                'full_name' => 'Bob Williams',
                'phone' => '2233445566',
                'zip_code' => '98765',
                'message' => 'I need a quote for a one-time consultation.',
            ],
            [
                'email' => 'example5@example.com',
                'full_name' => 'Charlie Brown',
                'phone' => '3344556677',
                'zip_code' => '11223',
                'message' => 'Could you provide a quote for a special event service?',
            ],
        ]);
    }
}
