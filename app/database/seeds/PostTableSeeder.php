<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PosttableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            Post::create([
            	'image' => $faker->imageUrl(960, 150),
            	'title' => $faker->sentence($nbWords = 6),
            	'description' => $faker->text($maxNbChars = 300)	
            ]);
        }
    }

}