<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactProfessionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_professional')->insert([
            [
                'receiver_user_id' => '1', // Assuming user ID 1 is the receiver
                'sender_user_id' => '2',   // Assuming user ID 2 is the sender
                'sender_fullname' => 'John Doe',
                'sender_phone' => '1234567890',
                'message' => 'Hello, I am interested in your services. Can we discuss further?',
            ],
            [
                'receiver_user_id' => '2',
                'sender_user_id' => '3',
                'sender_fullname' => 'Jane Smith',
                'sender_phone' => '0987654321',
                'message' => 'Hi, I have a few questions regarding your project. Please get in touch.',
            ],
            [
                'receiver_user_id' => '3',
                'sender_user_id' => '4',
                'sender_fullname' => 'Mark Brown',
                'sender_phone' => '1122334455',
                'message' => 'Good day, I would like to know more about your professional services.',
            ],
            [
                'receiver_user_id' => '4',
                'sender_user_id' => '5',
                'sender_fullname' => 'Emily Clark',
                'sender_phone' => '2233445566',
                'message' => 'Hello, I am looking for assistance with a project. Please contact me.',
            ],
            [
                'receiver_user_id' => '5',
                'sender_user_id' => '6',
                'sender_fullname' => 'Robert Lee',
                'sender_phone' => '6677889900',
                'message' => 'Hi, I am interested in your consultation services. Let me know your availability.',
            ],
        ]);
    }
}
