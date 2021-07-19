<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holiday;
class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 12; $i++) {
            $holiday = new Holiday();
            $holiday->place = $faker->city;
            $holiday->hotel_name = $faker->company();
            $holiday->date = $faker->dateTimeThisYear('+2 months');
            $holiday->image_url = $faker->imageUrl(640,480,'Hotels', true, $holiday->hotel_name, true);
            $holiday->children = $faker->boolean();
            $holiday->pets = $faker->boolean();
            $holiday->all_inclusive = $faker->boolean();
            $holiday->save();
        }
    }
}
