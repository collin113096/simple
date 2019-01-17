<?php

use Illuminate\Database\Seeder;
use App\Enrollment\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::Create([
        	'user_id' => 1,
        ]);
    }
}
