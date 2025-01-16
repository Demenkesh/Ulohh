<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            ['name' => 'Lagos'],
            ['name' => 'Abuja'],
            ['name' => 'Kano'],
            ['name' => 'Ogun'],
            ['name' => 'Rivers'],
            ['name' => 'Enugu'],
            ['name' => 'Kaduna'],
            ['name' => 'Anambra'],
            ['name' => 'Delta'],
            ['name' => 'Ekiti'],
        ]);
    }
}
