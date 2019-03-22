<?php

use Illuminate\Database\Seeder;

class EmployeeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'first_name' => 'Nishan', 'last_name' => 'GHimire', 'phone' => '984361616652', 'email' => 'nishanghimire.com',],

        ];

        foreach ($items as $item) {
            \App\Employee::create($item);
        }
    }
}
