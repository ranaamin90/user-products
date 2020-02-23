<?php

use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<3; $i++){
            App\Models\Favorite::create([
                'user_id' => 1,
                'product_id' => 1
            ]);
            App\Models\Favorite::create([
                'user_id' => 2,
                'product_id' => 2
            ]);
            App\Models\Favorite::create([
                'user_id' => 3,
                'product_id' => 3
            ]);
        }

    }
}
