<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 20; $i++) { 
            DB::table('tags')->insert([
                'tag' => $faker->jobTitle,
                'article_id' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
