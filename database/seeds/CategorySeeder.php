<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = ['Vue.js', 'php', 'Laravel', 'SQL', 'Javascript', 'HTML', 'CSS'];

        foreach ($data as $category) {
            # code...
            $new_category = new Category();
            $new_category->name = $category;
            $new_category->save();
        }
    }
}
