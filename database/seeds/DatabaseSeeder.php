<?php

use Illuminate\Database\Seeder;
use Database\Seeders\BlogSeeder;
use Database\Seeders\StatesSeeder;
use Database\Seeders\RatingsSeeder;
use Database\Seeders\ProductsSeeder;
use Database\Seeders\ProjectsSeeder;
use Database\Seeders\ServicesSeeder;
use Database\Seeders\GetAQuoteSeeder;
use Database\Seeders\CategoriesSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\CompanyTypeSeeder;
use Database\Seeders\ProjectPicsSeeder;
use Database\Seeders\SubCategoriesSeeder;
use Database\Seeders\BasicInfoTableSeeder;
use Database\Seeders\ServiceCategorySeeder;
use Database\Seeders\ContactProfessionalSeeder;
use Database\Seeders\ServicesSubCategorySeeder;
use Database\Seeders\BusinessDetailsTableSeeder;
use Database\Seeders\ShopByDeptContactInfoSeeder;
use Database\Seeders\ShopByDeptTransactionsSeeder;
use Database\Seeders\ProfServicesProvidedTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            // UsersTableSeeder::class,
            // BasicInfoTableSeeder::class,

            ProfServicesProvidedTableSeeder::class,

            BusinessDetailsTableSeeder::class,

            CompanyTypeSeeder::class,

            CategoriesSeeder::class,

            SubCategoriesSeeder::class,

            ProductsSeeder::class,

            ServicesSeeder::class,

            StatesSeeder::class,

            ServiceCategorySeeder::class,

            BlogSeeder::class,

            ShopByDeptTransactionsSeeder::class,

            ShopByDeptContactInfoSeeder::class,

            ServicesSubCategorySeeder::class,

            GetAQuoteSeeder::class,

            ProjectsSeeder::class,

            ProjectPicsSeeder::class,

            RatingsSeeder::class,
            
            ContactProfessionalSeeder::class,
        );
    }
}
