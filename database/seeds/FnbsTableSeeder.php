<?php

use Illuminate\Database\Seeder;
use App\Fnb;

class FnbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fnb::create([
            'name' => 'Fanta',
            'price' => '5000',
        ]);
    }
}
