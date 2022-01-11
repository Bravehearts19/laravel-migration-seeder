<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\TravelPackage;



class TravelPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $travelPackages = [
            [
                "destination_places" => "Barcellona",
                "start_date" => "2022-05-04",
                "end_date" => "2022-05-06",
                "price" => 340.00,
                "flight" => false,
                "flight_start_date" => null,
                "flight_end_date" => null,
                "board_description" => "Half Board",
                "informations" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur itaque modi, nemo beatae vitae, laudantium perspiciatis non unde voluptas maxime cupiditate delectus sapiente expedita quas omnis assumenda amet possimus facilis.",
                "extras" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis iusto numquam, voluptate fuga quo placeat delectus pariatur libero laborum? Nulla recusandae sunt facilis reiciendis ipsam impedit ea explicabo, non expedita.",
            ],
            [
                "destination_places" => "Las Vegas, Los Angeles",
                "start_date" => "2022-06-04",
                "end_date" => "2022-06-16",
                "price" => 1440.00,
                "flight" => true,
                "flight_start_date" => "2022-06-04 07:00:00",
                "flight_end_date" => "2022-06-16 19:00:00",
                "board_description" => "Only breakfast",
                "informations" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur itaque modi, nemo beatae vitae, laudantium perspiciatis non unde voluptas maxime cupiditate delectus sapiente expedita quas omnis assumenda amet possimus facilis.",
                "extras" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis iusto numquam, voluptate fuga quo placeat delectus pariatur libero laborum? Nulla recusandae sunt facilis reiciendis ipsam impedit ea explicabo, non expedita.",
            ]
        ];

        foreach ($travelPackages as $travelPackage) {
            $newTravelPackage = new TravelPackage();
            $newTravelPackage -> destination_places = $travelPackage["destination_places"];
            $newTravelPackage -> start_date = $travelPackage["start_date"];
            $newTravelPackage -> end_date = $travelPackage["end_date"];
            $newTravelPackage -> price = $travelPackage["price"];
            $newTravelPackage -> flight = $travelPackage["flight"];
            $newTravelPackage -> flight_start_date = $travelPackage["flight_start_date"];
            $newTravelPackage -> flight_end_date = $travelPackage["flight_end_date"];
            $newTravelPackage -> board_description = $travelPackage["board_description"];
            $newTravelPackage -> informations = $travelPackage["informations"];
            $newTravelPackage -> extras = $travelPackage["extras"];
            $newTravelPackage -> save();
        };

        for ($i=0; $i < 10; $i++) { 
            $newTravelPackage = new TravelPackage();
            $newTravelPackage -> destination_places = $faker -> text(200);
            $newTravelPackage -> start_date = $faker -> date();
            $newTravelPackage -> end_date = $faker -> date();
            $newTravelPackage -> price = $faker -> randomFloat(2, 0, 99000);
            $newTravelPackage -> flight = $faker -> boolean();
            $newTravelPackage -> flight_start_date = $faker -> dateTime();
            $newTravelPackage -> flight_end_date = $faker -> dateTime();
            $newTravelPackage -> board_description = $faker -> text(50);
            $newTravelPackage -> informations = $faker -> text(500);
            $newTravelPackage -> extras = $faker -> text(500);
            
            $newTravelPackage -> save(); 
        }
    }
}
