<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            [
                'title' => 'First Blog Post',
                'content' => 'This is the content of the first blog post. It contains some basic information about the blog.',
                'img_path' => 'path/to/image1.jpg',
                'cat_id' => 12,
            ],
            [
                'title' => 'Second Blog Post',
                'content' => 'This is the content of the second blog post. It contains more information about the blog and its purpose.',
                'img_path' => 'path/to/image2.jpg',
                'cat_id' => 12,
            ],
            [
                'title' => 'Third Blog Post',
                'content' => 'This is the content of the third blog post. This blog post discusses some interesting facts about blogging.',
                'img_path' => 'path/to/image3.jpg',
                'cat_id' => 12,
            ],
            [
                'title' => 'Fourth Blog Post',
                'content' => 'This is the content of the fourth blog post. It goes into more detail about how to create a successful blog.',
                'img_path' => 'path/to/image4.jpg',
                'cat_id' => 12,
            ],
            [
                'title' => 'Fifth Blog Post',
                'content' => 'This is the content of the fifth blog post. It shares insights about the future of blogging.',
                'img_path' => 'path/to/image5.jpg',
                'cat_id' => 12,
            ],
        ]);
    }
}
