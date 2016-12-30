<?php

use Illuminate\Database\Seeder;
use App\Transaction;

class FnbTransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaction = Transaction::find(1);
        $transaction->fnbs()->attach(1, [
            'price' => '5000',
            'qty' => '1',
        ]);
    }
}
