<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
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
        $ouvrages = Ouvrage::orderBy("titre")->get();
        return view('ouvrage/showOuvrage')->with('ouvrages', $ouvrages);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auteurs = Auteur::orderBy("nom")->get();
        return view("ouvrage.formAjoutOuvrage",["auteurs"=>$auteurs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'titre'=>'required',
            'auteurChoisi'=>'required'
        ]);
        $auteur = Auteur::where('nom', $request->input('auteurChoisi'))->first();
        $ouvrage = new Ouvrage();
        $ouvrage->titre = $request->input('titre');
        $ouvrage->auteur_id = $auteur->id;
        $ouvrage->save();
        session()->flash("success", "Ouvrage crée" );
        return redirect('/ouvrage');
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

        $splitKeywords = preg_split('/\s+/', $keywords, -1, PREG_SPLIT_NO_EMPTY);

        // Mots recherches
        $keywords = $splitKeywords;
        // Colonnes à comparer
        $places = ['o.titre', 'a.prenom', 'a.nom'];
        // tous les something LIKE some keyword
        $likes = array();
        // Les valeurs liées
        $values = array();
        foreach ($keywords as $keyword) {
            $placeIndex = 0;
            foreach ($places as $place) {
                array_push($likes,"($place LIKE ?)");
                array_push($values, $keyword);
            }
        }
        $colonne = join('+', $likes);

        $sql =
            "SELECT o.*, a.*, $colonne AS nb_occurrences
            FROM ouvrages o
                INNER JOIN auteurs a ON o.auteur_id = a.id
            HAVING nb_occurrences > 0
            ORDER BY nb_occurrences DESC";
        $params = array();
        foreach ($keywords as $keyword) {
            foreach ($places as $place) {
                array_push($params, "%$keyword%");
            }
        }
        $resultatRecherche = DB::select($sql, $params);

        return view('ouvrage/listeOuvrageMotsCles')->with('resultatRecherche',$resultatRecherche);
    }


    public function listerParAuteur($id){
        $ouvrages = Ouvrage::where("auteur_id","=",$id)->get();
        $auteur = Auteur::find($id);
        return view("ouvrage.AuteurOuvrage",["ouvrages"=>$ouvrages,"auteur"=>$auteur]);
    }
}
