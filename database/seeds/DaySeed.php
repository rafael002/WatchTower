<?php

use Illuminate\Database\Seeder;

use App\Models\Day;

class DaySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::insert(['name' => 'SUN', 	'day_value' => '0' ]);
        Day::insert(['name' => 'MON', 	'day_value' => '1' ]);
        Day::insert(['name' => 'TUE', 	'day_value' => '2' ]);
        Day::insert(['name' => 'WED', 	'day_value' => '3' ]);
        Day::insert(['name' => 'THU', 	'day_value' => '4' ]);
        Day::insert(['name' => 'FRI', 	'day_value' => '5' ]);
        Day::insert(['name' => 'SAT', 	'day_value' => '6' ]);
    }
}
