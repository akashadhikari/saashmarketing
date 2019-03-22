<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            "Artificial Intelligence and Data Science",
            "AI Consulting",
            "Brand growth" ,
            "Search engine optimization",
            "Email Marketing",
            "PPC"   
        ];

        foreach($services as $service){
            \App\Service::create([
                'title' => $service
            ]);
        }
    }
}
