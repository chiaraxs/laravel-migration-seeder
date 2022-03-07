<?php


use Illuminate\Database\Seeder;
use App\Package;
use Faker\Generator as Faker;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for($i = 0; $i < 10; $i++) {
            $package = new Package();

            $package->description = $faker->text('100');
            $package->total_price = $faker->numberBetween(100,600);
            $package->departure_date = $faker->date('23-01-23');
            $package->arrival_date = $faker->date('23-07-23');
            $package->departure_airport = $faker->text('100');
            $package->arrival_airport = $faker->text('100');
            $package->hotel = $faker->text('100');
            $package->restaurant = $faker->text('100');
            $package->tours = $faker->text('100');
            $package->confirmed = $faker->boolean();
            $package->emergency_doctor = $faker->text('100');

            $package->save();
        }
    }
};
