<?php

use Illuminate\Database\Seeder;

class AppointmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'client_id' => 1, 'employee_id' => 1, 'start_time' => '2019-02-19 00:56:36', 'finish_time' => '2019-02-19 02:56:44', 'comments' => 'hyw',],

        ];

        foreach ($items as $item) {
            \App\Appointment::create($item);
        }
    }
}
