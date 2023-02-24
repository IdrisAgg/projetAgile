<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use App\Models\Exemplaire;
use App\Models\Ouvrage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExemplaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index()
    {

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
     * @param  \App\Models\Exemplaire  $exemplaire
     * @return \Illuminate\Http\Response
     */
    public function show(Exemplaire $exemplaire)
    {

     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exemplaire  $exemplaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Exemplaire $exemplaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exemplaire  $exemplaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exemplaire $exemplaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exemplaire  $exemplaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exemplaire $exemplaire)
    {
        //
    }

    public function exemplaireOuvrage($id){

        $exemplaires = Exemplaire::where("ouvrage_id","=",$id)->get();
        $emprunts = Emprunt::all();
        return view("exemplaire.show",['exemplaire'=>$exemplaires,"emprunts"=>$emprunts]);


    }
}
