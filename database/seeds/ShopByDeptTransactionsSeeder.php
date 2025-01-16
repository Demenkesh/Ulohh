<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopByDeptTransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_by_dept_transactions')->insert([
            [
                'transaction_id' => 'TX123456789',
                'paystack_ref' => 'REF123456',
                'product_id' => 'P001',
                'product_name' => 'Product 1',
                'quantity' => 2,
                'price' => 1000,
                'delivered' => 'Y',
            ],
            [
                'transaction_id' => 'TX123456790',
                'paystack_ref' => 'REF123457',
                'product_id' => 'P002',
                'product_name' => 'Product 2',
                'quantity' => 1,
                'price' => 2000,
                'delivered' => 'N',
            ],
            [
                'transaction_id' => 'TX123456791',
                'paystack_ref' => 'REF123458',
                'product_id' => 'P003',
                'product_name' => 'Product 3',
                'quantity' => 3,
                'price' => 500,
                'delivered' => 'Y',
            ],
            [
                'transaction_id' => 'TX123456792',
                'paystack_ref' => 'REF123459',
                'product_id' => 'P004',
                'product_name' => 'Product 4',
                'quantity' => 5,
                'price' => 1500,
                'delivered' => 'Y',
            ],
            [
                'transaction_id' => 'TX123456793',
                'paystack_ref' => 'REF123460',
                'product_id' => 'P005',
                'product_name' => 'Product 5',
                'quantity' => 1,
                'price' => 1200,
                'delivered' => 'N',
            ],
        ]);
    }
}
