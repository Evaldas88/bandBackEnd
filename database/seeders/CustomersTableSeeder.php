<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Customer::create([ 
            'name' => 'John', 
            'surname' => 'Doe', 
            'email' => 'john@doe.com', 
            'phone' => '862233555', 
            'hotel_id' => '1', 
        ]);
        \App\Models\Customer::create([ 
            'name' => 'Laura', 
            'surname' => 'Smith', 
            'email' => 'laura@smith.com', 
            'phone' => '862233666', 
            'hotel_id' => '2', 
        ]);
      
    }
}