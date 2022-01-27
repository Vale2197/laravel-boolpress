<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        for ($i=0; $i < 20; $i++) { 

            $post = new Post();
            $post->title = $faker->sentence(2);
            $post->subtitle = $faker->sentence(5);
            $post->image = $faker->image('resources/img', 300, 300, '');
            $post->save();

        }

    }
}
