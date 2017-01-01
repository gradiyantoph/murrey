<?php

use Illuminate\Database\Seeder;
use App\Transaction;

class StockTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaction = Transaction::find(1);
        $transaction->stocks()->attach(1, [
            'qty' => '2',
            'price' => '5000',
        ]);
    }
}
