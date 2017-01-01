<?php

use Illuminate\Database\Seeder;
use App\Store;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Store::create([
//            'name' => 'Murrey Cipto',
//        ]);
        Store::create([
            'name' => 'Murrey Pecilon',
        ]);
    }
}
