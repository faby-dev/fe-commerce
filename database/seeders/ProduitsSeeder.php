<?php

namespace Database\Seeders;

use App\Models\Produits;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i<10;$i++){
            Produits::create([
                "titre" => $faker->sentence(4),
                "prix" => $faker->numberBetween(15,300) *100,
                "quantite" => $faker->numberBetween(0,1000),
                "description" => $faker->text,
                "images" => "https://via.placeholder.com/200x200",
                "ispublished" => true
            ]);
        }
    }
}
