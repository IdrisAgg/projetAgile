<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exemplaire extends Model
{
    use HasFactory;
    protected $fillable = ["biblio_id",'ouvrage_id'];
    public function ouvrage()
    {
        return $this->belongsTo(Ouvrage::class, "ouvrage_id");
    }
    public function bibliotheque()
    {
        return $this->belongsTo(Bibliotheque::class, "biblio_id");
    }

    public function emprunt()
    {
        return $this->belongsTo(Exemplaire::class, 'id');
    }
}
