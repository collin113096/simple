<?php

use Illuminate\Database\Seeder;
use App\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Grade::create([
                'name' => 'Nursery',
            ]);

        Grade::create([
                'name' => 'Kinder',
            ]);

        Grade::create([
                'name' => 'Prep',
            ]);

        for($grade=1;$grade<=10;$grade++){
        	Grade::create([
	        	'name' => 'Grade '.$grade,
	        ]);
        }
    }
}
