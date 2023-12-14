<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $apartment = new Apartment();
            $apartment->user_id = rand(1, 10); // Assegna un ID utente casuale
            $apartment->name = $faker->name();
            $apartment->rooms = rand(1, 5);
            $apartment->beds = rand(1, 6);
            $apartment->bathrooms = rand(1, 3);
            $apartment->mq = rand(30, 150);
            $apartment->address = $faker->address;
            $apartment->lat = $faker->latitude;
            $apartment->lon = $faker->longitude;
            $apartment->photo = $faker->imageUrl(640, 480); // Immagine casuale
            $apartment->visible = rand(0, 1); // Visibilità casuale (0 = nascosto, 1 = visibile)
            $apartment->save();
        }
    }
}
