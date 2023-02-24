<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use App\Models\Exemplaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
