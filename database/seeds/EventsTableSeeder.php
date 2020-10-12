<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = Faker\Factory::create();
        for ($i=0; $i <20 ; $i++) { 
           Event::create([
               'titre' => $faker->sentence(2),
               'sous_titre' => $faker->sentence(5),
               'description' => $faker->text,
               'lieu' => $faker->sentence(3),
               'ville' => $faker->sentence(2),
               'id_categorie' => $faker->numberBetween(1,5),
               'user_id' => $faker->numberBetween(1,3),
               'prix' => $faker->numberBetween(1,50) * 100,
               'date_debut' => $faker->date(),
               'date_fin' => $faker->date(),
               'heure' => $faker->dateTime(),
               'photo' => 'https://via.placeholder.com/150'
           ]);
        }
    }
}
