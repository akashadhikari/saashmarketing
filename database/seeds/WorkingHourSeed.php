<?php

use Illuminate\Database\Seeder;

class WorkingHourSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'employees_id' => 1, 'date' => '2019-02-20', 'start_time' => '09:00:00', 'time' => '17:00:00',],
            ['id' => 2, 'employees_id' => 1, 'date' => '2019-02-20', 'start_time' => '10:50:11', 'time' => '19:50:15',],

        ];

        foreach ($items as $item) {
            \App\WorkingHour::create($item);
        }
    }
}
