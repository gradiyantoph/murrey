<?php

use Illuminate\Database\Seeder;
use App\Table;

class TablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Table::create([
            'store_id' => '1', 
            'number' => '1',
        ]);
        Table::create([
            'store_id' => '1', 
            'number' => '2',
        ]);
//        Table::create([
//            'store_id' => '2',
//            'number' => '1',
//        ]);
//        Table::create([
//            'store_id' => '2',
//            'number' => '2',
//        ]);
    }
}
