<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ouvrage extends Model
{
    use HasFactory;

    public function auteur(){
        return $this->belongsTo(Auteur::class, "auteur_id");
    }
    public function exemplaires(){
        return $this->hasMany(Exemplaire::class, "ouvrage_id");
    }
}
