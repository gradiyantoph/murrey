<?php

use Illuminate\Database\Seeder;
use App\Rent;

class FareRentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rent = Rent::find(1);
        $rent->fares()->attach(1, [
            'length' => '60',
            'price' => '250',
        ]);
    }
}
