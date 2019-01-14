<?php

use Illuminate\Database\Seeder;
use App\Mode;

class ModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mode::create([
        	'name' => 'Cash'
        ]);

         Mode::create([
        	'name' => 'Installment'
        ]);
    }
}
