<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Auteur;
use App\Models\Bibliotheque;
use App\Models\Emprunt;
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
        //Les utilisateurs
        User::factory(10)->create();
        User::create([
            'name'=>"idris",
            "isAdmin"=>1,
            "email"=>"idris@gmail.com",
            "password"=>bcrypt(12345678),
        ]);
        User::create([
            'name'=>"wahib",
            "isAdmin"=>1,
            "email"=>"wahib@gmail.com",
            "password"=>bcrypt(12345678),
        ]);
        User::create([
            'name'=>"mahmoudou",
            "isAdmin"=>1,
            "email"=>"mahmoudou@gmail.com",
            "password"=>bcrypt(12345678),
        ]);
        User::create([
            'name'=>"lina",
            "isAdmin"=>1,
            "email"=>"lina@gmail.com",
            "password"=>bcrypt(12345678) ,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //les auteurs
        Auteur::create([
            "nom"=>"Yasmina",
            "prenom"=>"KHADRA"
        ]);
        Auteur::create([
            "nom"=>"Jules",
            "prenom"=>"Verne"
        ]);
        Auteur::create([
            "nom"=>"Albert",
            "prenom"=>"Camus"
        ]);
        Auteur::create([
            "nom"=>"Émile",
            "prenom"=>"Zola"
        ]);
        Auteur::create([
            "nom"=>"J. K",
            "prenom"=>"Rowling"
        ]);
        Auteur::create([
            "nom"=>"George R. R",
            "prenom"=>"Martin"
        ]);
        Auteur::create([
            "nom"=>"Victor",
            "prenom"=>"Hugo"
        ]);
        Auteur::create([
            "nom"=>"Honoré",
            "prenom"=>"De Balzac"
        ]);
        Auteur::create([
            "nom"=>"Ernest",
            "prenom"=>"Hemingway"
        ]);
        Auteur::create([
            "nom"=>"Mahmoud",
            "prenom"=>"Darwich"
        ]);

        //Les ouvrage
        //Ouvrage::factory(10)-> create();
        Ouvrage::create([
            "titre"=>"Ce que le jour doit à la nuit",
            "auteur_id"=>1
        ]);
        Ouvrage::create([
            "titre"=>"L'Atentat",
            "auteur_id"=>1
        ]);
        Ouvrage::create([
            "titre"=>"Les hirondelles de kaboul",
            "auteur_id"=>1
        ]);
        Ouvrage::create([
            "titre"=>"Le Tour du monde en quatre-vingts jours",
            "auteur_id"=>2
        ]);
        Ouvrage::create([
            "titre"=>"Voyage au centre de la Terre",
            "auteur_id"=>2
        ]);
        Ouvrage::create([
            "titre"=>"Vingt Mille Lieues sous les mers",
            "auteur_id"=>2
        ]);
        Ouvrage::create([
            "titre"=>"L'Étranger",
            "auteur_id"=>3
        ]);
        Ouvrage::create([
            "titre"=>"La Peste",
            "auteur_id"=>3
        ]);
        Ouvrage::create([
            "titre"=>"La Chute",
            "auteur_id"=>3
        ]);
        Ouvrage::create([
            "titre"=>"Germinal",
            "auteur_id"=>4
        ]);
        Ouvrage::create([
            "titre"=>"Nana",
            "auteur_id"=>4
        ]);
        Ouvrage::create([
            "titre"=>"Harry Potter à l'école des sorciers",
            "auteur_id"=>5
        ]);
        Ouvrage::create([
            "titre"=>"House of the Dragon",
            "auteur_id"=>6
        ]);
        Ouvrage::create([
            "titre"=>"Game of thrones",
            "auteur_id"=>6
        ]);
        Ouvrage::create([
            "titre"=>"Les Misérables",
            "auteur_id"=>7
        ]);
        Ouvrage::create([
            "titre"=>"Notre-Dame de Paris",
            "auteur_id"=>7
        ]);
        Ouvrage::create([
            "titre"=>"Le Père Goriot",
            "auteur_id"=>8
        ]);
        Ouvrage::create([
            "titre"=>"Le Vieil Homme et la Mer",
            "auteur_id"=>9
        ]);
        Ouvrage::create([
            "titre"=>"Pour qui sonne le glas",
            "auteur_id"=>9
        ]);
        Ouvrage::create([
            "titre"=>"Murale",
            "auteur_id"=>10
        ]);
        Ouvrage::create([
            "titre"=>"In the Presence of AbsenceLe Vieil Homme et la Mer",
            "auteur_id"=>10
        ]);
        Ouvrage::create([
            "titre"=>"Une mémoire pour l'oubli",
            "auteur_id"=>10
        ]);



        Bibliotheque::factory(10)->create();
        Exemplaire::factory(60)->create();
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
        Emprunt::create([
            "id"=>1,
            "date_retour"=>"2023-02-25",
            "nb_prolongation"=>1,
            "user_id"=>14,
        ]);
        Emprunt::create([
            "id"=>52,
            "date_retour"=>"2023-02-28",
            "nb_prolongation"=>2,
            "user_id"=>14,
        ]);
    }
}
