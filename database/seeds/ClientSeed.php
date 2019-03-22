<?php

use Illuminate\Database\Seeder;

class ClientSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'first_name' => 'Nitish', 'last_name' => 'Ghimire', 'phone' => '9860150116', 'email' => 'nitish.ghimire1@gmail.com',],

        ];

        foreach ($items as $item) {
            \App\Client::create($item);
        }
    }
}
