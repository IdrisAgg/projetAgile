<?php

namespace App\Http\Controllers;

use App\Models\Exemplaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpruntController extends Controller
{
    public function show()
    {
        $examplaires = Exemplaire::where("user_id", "=", Auth::user()->id);

        dd($examplaires);
    }
}
