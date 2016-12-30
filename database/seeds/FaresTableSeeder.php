<?php

use Illuminate\Database\Seeder;
use App\Fare;

class FaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fare::create([
            'name' => 'H. Hour',
            'price' => '250',
        ]);
        Fare::create([
            'name' => 'Normal',
            'price' => '333',
        ]);
    }
}
