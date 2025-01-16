<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectPicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_pics')->insert([
            [
                'pics_id' => '1',
                'pics_link' => 'https://example.com/images/project1_pic1.jpg',
            ],
            [
                'pics_id' => '1',
                'pics_link' => 'https://example.com/images/project1_pic2.jpg',
            ],
            [
                'pics_id' => '2',
                'pics_link' => 'https://example.com/images/project2_pic1.jpg',
            ],
            [
                'pics_id' => '2',
                'pics_link' => 'https://example.com/images/project2_pic2.jpg',
            ],
            [
                'pics_id' => '3',
                'pics_link' => 'https://example.com/images/project3_pic1.jpg',
            ],
            [
                'pics_id' => '3',
                'pics_link' => 'https://example.com/images/project3_pic2.jpg',
            ],
            [
                'pics_id' => '4',
                'pics_link' => 'https://example.com/images/project4_pic1.jpg',
            ],
            [
                'pics_id' => '4',
                'pics_link' => 'https://example.com/images/project4_pic2.jpg',
            ],
            [
                'pics_id' => '5',
                'pics_link' => 'https://example.com/images/project5_pic1.jpg',
            ],
            [
                'pics_id' => '5',
                'pics_link' => 'https://example.com/images/project5_pic2.jpg',
            ],
        ]);
    }
}
