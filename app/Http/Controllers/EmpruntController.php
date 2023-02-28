<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use App\Models\Exemplaire;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class EmpruntController extends Controller
{
    public function show()
    {
        $examplaires = Emprunt::where("user_id", "=", Auth::user()->id)->get();
        return view("emprunt.show", ["examplaires" => $examplaires]);

        // dd($examplaires);
    }

    public function modal()
    {

        return view("emprunt.modal");
        // dd($examplaires);
    }

    public function prolonger($id)
    {

        $emprunt = Emprunt::find($id);
        if($emprunt->nb_prolongation<2){
            $date = (new DateTime($emprunt->date_retour))->add(new DateInterval('P21D')) ;
            $emprunt->date_retour =  $date;
            $emprunt->nb_prolongation+=1;
            $emprunt->save();
            session()->flash("success", "La prolongation  a bien prise en compte");

            return redirect("/emprunts");
        }else{
            session()->flash("unsuccess", "Vous avez attend le nombre maximum d'emprunt ");
            return redirect("emprunt.show");
        }

        // dd($examplaires);
    }
}
