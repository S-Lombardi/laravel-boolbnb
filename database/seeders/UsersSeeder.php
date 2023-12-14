<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
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
            $user = new \App\Models\User();
            $user->name = $faker->name();
            $user->surname = $faker->lastName();
            $user->date_of_birth = $faker->dateTimeBetween('1980-01-01', '2000-12-31')->format('Y-m-d');
            $user->email = $faker->unique()->safeEmail();
            $user->email_verified_at = now();
            $user->password = Hash::make('password');
            $user->remember_token = null;
            $user->created_at = now();
            $user->updated_at = now();
            $user->save();
        }
    }
}
