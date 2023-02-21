<?php

namespace App\Http\Controllers;

use App\Models\Ouvrage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            ["id" => 1, "titre" => 'Harry Potter', "auteur" => 'J.k Rowlings'],
            ["id" => 2, "titre" => 'Naruto Shippuden', "auteur" => 'Masashi Kishimoto '],
            ["id" => 3, "titre" => 'Naruto film', "auteur" => 'Masashi Kishimoto '],
            ["id" => 4, "titre" => 'One Piece', "auteur" => 'Eiichiro Oda'],
            ["id" => 5, "titre" => 'Les misérables', "auteur" => 'Victor Hugo'],
            ["id" => 4, "titre" => 'Femmes savantes', "auteur" => 'Molière']
        ];
        return view('ouvrage/ouvrage')->with('ouvrages', $ouvrages);
    }

    public function getByKeywords($keywords){

        $ouvrages = [
            ["id" => 1, "titre" => 'Harry Potter', "auteur" => 'J.k Rowlings'],
            ["id" => 2, "titre" => 'Naruto Shippuden', "auteur" => 'Masashi Kishimoto '],
            ["id" => 3, "titre" => 'Naruto film', "auteur" => 'Masashi Kishimoto '],
            ["id" => 4, "titre" => 'One Piece', "auteur" => 'Eiichiro Oda'],
            ["id" => 5, "titre" => 'Les misérables', "auteur" => 'Victor Hugo'],
            ["id" => 4, "titre" => 'Femmes savantes', "auteur" => 'Molière']
        ];
         //Il crée en dur une liste de mots cles et la vue les affiche
         $keywords = [
            "Naruto",
            "Victor "
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
