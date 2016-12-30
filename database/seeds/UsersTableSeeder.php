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
            'name' => 'Admin 1', 
            'username' => 'admin1', 
            'password' => bcrypt('admin1'),
        ]);
    }
}
