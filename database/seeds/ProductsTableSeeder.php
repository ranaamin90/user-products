<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i<10; $i++){
            App\Models\Product::create([
                'name' => $faker->word,
                'description' => $faker->paragraph,
            ]);
        }
    }
}
