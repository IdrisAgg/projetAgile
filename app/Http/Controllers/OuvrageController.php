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
        $ouvrages = Ouvrage::all();
        return view('ouvrage/showOuvrage')->with('ouvrages', $ouvrages);
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

    public function getByKeywords(Request $request){
        $keywords = $_GET["keywords"];
        var_dump($keywords);

        $splitKeywords = preg_split('/\s+/', $keywords, -1, PREG_SPLIT_NO_EMPTY);
        dd($splitKeywords);

        $ouvragesByKeywords = [];
        
         //Il crée en dur une liste de mots cles et la vue les affiche
        return view('ouvrage/listeOuvrageMotsCles')->with('keywords',$keywords);
    }

    public function listerParAuteur($auteur){
        $ouvrage = DB::table('auteurs')->join("ouvrages","auteurs.id","=",'ouvrages.auteur_id')->where("auteurs.nom","like",'%'.$auteur.'%')->get();
        dd($ouvrage);
    }
}
