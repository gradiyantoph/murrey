<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin 1', 
            'username' => 'sadmin1', 
            'password' => bcrypt('sadmin1'),
            'level' => 'Super Admin',
        ]);
        User::create([
            'name' => 'Admin 1', 
            'username' => 'admin1', 
            'password' => bcrypt('admin1'),
            'level' => 'Admin',
        ]);
        User::create([
            'name' => 'Cashier 1', 
            'username' => 'cashier1', 
            'password' => bcrypt('cashier1'),
            'level' => 'Cashier',
        ]);
    }
}
