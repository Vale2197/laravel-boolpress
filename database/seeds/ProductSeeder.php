<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Generator as faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $product = new Product();
            $product->name = $faker->sentence(2);
            $product->price = $faker->numberBetween(1, 100);
            $product->image = $faker->image();
            $product->save();
        }
    }
}
