<?php

use Illuminate\Database\Seeder;
use App\Rent;

class RentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rent::create([
            'table_id' => '1',
        ]);
    }
}
