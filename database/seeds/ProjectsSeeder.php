<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'user_id' => '1',
                'project_name' => 'Project One',
                'sub_category' => 'Residential',
                'project_address' => '123 Street Name, City, Country',
                'project_year' => '2022',
                'project_cost' => '50000',
                'link_to_website' => 'https://www.projectone.com',
                'pics_id' => '1',
            ],
            [
                'user_id' => '2',
                'project_name' => 'Project Two',
                'sub_category' => 'Commercial',
                'project_address' => '456 Another St, City, Country',
                'project_year' => '2023',
                'project_cost' => '150000',
                'link_to_website' => 'https://www.projecttwo.com',
                'pics_id' => '2',
            ],
            [
                'user_id' => '3',
                'project_name' => 'Project Three',
                'sub_category' => 'Industrial',
                'project_address' => '789 Industrial Rd, City, Country',
                'project_year' => '2021',
                'project_cost' => '200000',
                'link_to_website' => 'https://www.projectthree.com',
                'pics_id' => '3',
            ],
            [
                'user_id' => '4',
                'project_name' => 'Project Four',
                'sub_category' => 'Infrastructure',
                'project_address' => '101 Main St, City, Country',
                'project_year' => '2022',
                'project_cost' => '80000',
                'link_to_website' => 'https://www.projectfour.com',
                'pics_id' => '4',
            ],
            [
                'user_id' => '5',
                'project_name' => 'Project Five',
                'sub_category' => 'Residential',
                'project_address' => '202 Fifth Ave, City, Country',
                'project_year' => '2023',
                'project_cost' => '120000',
                'link_to_website' => 'https://www.projectfive.com',
                'pics_id' => '5',
            ],
        ]);
    }
}
