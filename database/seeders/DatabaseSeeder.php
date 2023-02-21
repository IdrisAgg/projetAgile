<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Auteur;
use App\Models\Bibliotheque;
use App\Models\Exemplaire;
use App\Models\Ouvrage;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Auteur::factory(10)->create();
        User::create([
            'name'=>"idris",
            "isAdmin"=>1,
            "email"=>"idris@gmail.com",
            "password"=>12345678,
        ]);
        User::create([
            'name'=>"wahib",
            "isAdmin"=>1,
            "email"=>"wahib@gmail.com",
            "password"=>12345678,
        ]);
        User::create([
            'name'=>"mahmoudou",
            "isAdmin"=>1,
            "email"=>"mahmoudou@gmail.com",
            "password"=>12345678,
        ]);
        User::create([
            'name'=>"lina",
            "isAdmin"=>1,
            "email"=>"lina@gmail.com",
            "password"=>12345678,
        ]);

        Ouvrage::factory(10)-> create();
        Bibliotheque::factory(10)->create();
        Exemplaire::factory(10)->create();
        Exemplaire::create([
            "date_retour"=>now(),
            "biblio_id"=>rand(1,10),
            "ouvrage_id"=>rand(1,10),
            "user_id"=>14
        ]);
        Exemplaire::create([
            "date_retour"=>"2023-02-25",
            "biblio_id"=>rand(1,10),
            "ouvrage_id"=>rand(1,10),
            "user_id"=>14
        ]);
        Exemplaire::create([
            "date_retour"=>"2023-02-28",
            "biblio_id"=>rand(1,10),
            "ouvrage_id"=>rand(1,10),
            "user_id"=>14
        ]);
    }
}
