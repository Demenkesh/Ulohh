<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            [
                'rating' => 5,
                'rateable_type' => 'App\Models\Project', // Example: A Project model
                'rateable_id' => 1, // Assuming project ID 1
                'user_id' => 1,
            ],
            [
                'rating' => 4,
                'rateable_type' => 'App\Models\Project',
                'rateable_id' => 2,
                'user_id' => 2,
            ],
            [
                'rating' => 3,
                'rateable_type' => 'App\Models\Blog', // Example: A Blog model
                'rateable_id' => 1, // Assuming blog ID 1
                'user_id' => 3,
            ],
            [
                'rating' => 2,
                'rateable_type' => 'App\Models\Blog',
                'rateable_id' => 2,
                'user_id' => 4,
            ],
            [
                'rating' => 5,
                'rateable_type' => 'App\Models\Project',
                'rateable_id' => 3,
                'user_id' => 5,
            ],
        ]);
    }
}
