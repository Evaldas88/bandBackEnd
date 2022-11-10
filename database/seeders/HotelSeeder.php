<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Hotel::factory(4)->create();

    //     \App\Models\Hotel::create([ 
    //         'hotel_title' => 'Paris SPa', 
    //         'distance' => '1696', 
    //         'days' => '5', 
    //         'price' => '399.00', 
    //         'country_id' => '1', 
    //     ]);
    //     \App\Models\Hotel::create([ 
    //         'hotel_title' => 'Hilton', 
    //         'distance' => '2262', 
    //         'days' => '4', 
    //         'price' => '319.00', 
    //         'country_id' => '2', 
    //     ]);
        
    // }
}
}