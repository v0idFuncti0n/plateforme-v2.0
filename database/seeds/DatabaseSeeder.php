<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
        $faker = Faker::create();
        // $this->call(UsersTableSeeder::class);
        DB::table('admin')->insert([
            'cin' => 'IAHD',
            'nom' => 'admin',
            'prenom' => 'admin',
            'username' => 'admin',
            'email_address' => 'admin@admin.com',
            'password' => 'admin',
        ]);


        DB::table('departement')->insert(
            [
                'nom' => 'Informatique',
                'date_cr' => \Carbon\Carbon::create('1990', '5', '2'),
                'chef' => 'M.Oumsis',
                'date_fin' => \Carbon\Carbon::create('2020', '10', '3'),
            ]
        );
        DB::table('module')->insert([
            'nom_module' => 'Programming',

        ]);

        DB::table('matiere')->insert([
            'nom_matiere' => 'C',
            'volume_horaire' => 90,
            'module_id' => 1,
        ]);

        DB::table('professeur')->insert([
            'departement_id' => 1,
            'cin' => 'CD502',
            'nom' => 'prof',
            'prenom' => 'prof',
            'username' => 'prof',
            'email' => 'prof@email.com',
            'password' => 'prof',
            'grade' => 2,
        ]);

        DB::table('matiere_prof')->insert([
            'matiere_id' => 1,
            'professeur_id' => 1,
        ]);

        DB::table('filiere')->insert([
            'departement_id' => 1,
            'nom' => 'GL',
            'coordinateur' => $faker->name,
            'datedebut' => $faker->dateTime(),
            'datefin' => $faker->dateTime(),

        ]);

        DB::table('niveau')->insert([
            'nom' => 'premiere',
        ]);

        DB::table('niveau')->insert([
            'nom' => 'deuxieme',
        ]);
        DB::table('niveau')->insert([
            'nom' => 'troiseme',
        ]);

        DB::table('filiere_niveau')->insert([
            'filiere_id' => 1,
            'niveau_id' =>1,
        ]);

        foreach (range(1, 50) as $i) {
            DB::table('etudiant')->insert([
                'cin' => $faker->randomNumber(6),
                'cne' => $faker->randomNumber(6),
                'nom' => $faker->name,
                'prenom' => $faker->lastName,
                'filiere_id' => 1,
                'niveau_id' => 1,
                'email_address' => $faker->email,
                'numero' => $faker->randomNumber(),
                'num_apologie' => $faker->randomNumber(6)
            ]);
        }
    }

}
