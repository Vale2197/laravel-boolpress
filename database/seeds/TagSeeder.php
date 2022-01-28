<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['animals', 'people', 'life', 'cars', 'nature', 'sea', 'flowers', 'technology', 'computers'];

        foreach ($tags as $tag) {
            # code...
            $new_tag = new Tag();
            $new_tag->name = $tag;
            $new_tag->save();
        }

        //
    }
}
