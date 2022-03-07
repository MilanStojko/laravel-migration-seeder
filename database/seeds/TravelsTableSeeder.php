<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i< 20; $i++){
            $newTravel = new Travel();
            $newTravel->name = $faker->word();
            $newTravel->location = $faker->word();
            $newTravel->hotel = $faker->word();
            $newTravel->date = $faker->date();
            $newTravel->price = $faker->randomDigit();
            $newTravel->save();
        }
    }
}
