<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i <10 ; $i++) { 
           Categorie::create([
               'nom' => $faker->sentence(2),
               
           ]);
        }
    }
}
