<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
			User::create([
				'email' => 'contact@camilia.co', 'password' => Hash::make('C4miL1a-admin')
			]);

	}

}