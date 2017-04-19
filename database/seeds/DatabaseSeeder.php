<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

		$limit = 500;

		for ($i = 0; $i < $limit; $i++) {

			$product = new \App\Models\Address();
			$product->street = $faker->streetAddress;
			$product->postcode = $faker->postcode;
			$product->town = $faker->city;
			$product->country = $faker->country;

			$product->save();
		}
	}
}
