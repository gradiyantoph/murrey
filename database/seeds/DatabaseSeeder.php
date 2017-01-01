<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(TablesTableSeeder::class);
        $this->call(FaresTableSeeder::class);
        $this->call(RentsTableSeeder::class);
        $this->call(FareRentTableSeeder::class);
        $this->call(FnbsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(StockTransactionTableSeeder::class);
    }
}
