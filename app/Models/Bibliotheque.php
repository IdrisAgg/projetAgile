<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliotheque extends Model
{
    use HasFactory;
    public function exemplaires(){
        return $this->hasMany(Exemplaire::class, "biblio_id");
    }
}
