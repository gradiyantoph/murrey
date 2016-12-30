<?php

use Illuminate\Database\Seeder;
use App\Transaction;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'customer_name' => 'Contoh', 
            'rent_id' => '1', 
            'user_id' => '1',
        ]);
    }
}
