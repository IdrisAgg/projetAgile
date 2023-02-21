<?php

namespace App\Http\Controllers;

use App\Models\Ouvrage;
use Illuminate\Http\Request;

class OuvrageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Le contrôleur crée une liste en dur des ouvrages et la vue l'affiche correctement
        $ouvrages = [
            ["id" => 1, "titre" => 'Harry Potter', "auteur_id" => '1'],
            ["id" => 2, "titre" => 'Naruto Shippuden', "auteur_id" => '2'],
            ["id" => 3, "titre" => 'Naruto film', "auteur_id" => '3'],
            ["id" => 4, "titre" => 'One Piece', "auteur_id" => '4'],
            ["id" => 5, "titre" => 'Les misérables', "auteur_id" => '5'],
            ["id" => 4, "titre" => 'Femmes savantes', "auteur_id" => '6']
        ];

        //Il crée en dur une liste de mots cles et la vue les affiche
        $keywords = [
            "Harry",
            "Potter "
        ];

        //La dao crée la liste des ouvrages répondant aux mots cles mis en dur
        $reponse = [];
        foreach ($ouvrages as $key => $value){
            if ($value) {

            }
        }

        return view('ouvrage/ouvrage')->with('ouvrages', $ouvrages);
    }

    public function getByKeywords($keywords){

        $ouvrages = [
            ["id" => 1, "titre" => 'Harry Potter', "auteur_id" => '1'],
            ["id" => 2, "titre" => 'Naruto Shippuden', "auteur_id" => '2'],
            ["id" => 3, "titre" => 'Naruto film', "auteur_id" => '3'],
            ["id" => 4, "titre" => 'One Piece', "auteur_id" => '4'],
            ["id" => 5, "titre" => 'Les misérables', "auteur_id" => '5'],
            ["id" => 4, "titre" => 'Femmes savantes', "auteur_id" => '6']
        ];
        return view('ouvrage/ouvrage')->with('ouvrages', $ouvrages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function show(Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function edit(Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ouvrage  $ouvrage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ouvrage $ouvrage)
    {
        //
    }

}
