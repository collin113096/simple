<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           User::create([
        	'email' => 'jiyocollin@gmail.com',
        	'password' => Hash::make('intelintel'),
        ]);
    }
}
