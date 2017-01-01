<?php

use Illuminate\Database\Seeder;
use App\Stock;

class StocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::create([
            'store_id' => '1',
            'fnb_id' => '1',
        ]);
    }
}
