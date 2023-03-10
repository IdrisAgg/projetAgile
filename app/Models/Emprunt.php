<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    use HasFactory;

    public function exemplaire(){
        return $this->belongsTo(Exemplaire::class,"id");
    }
    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }
}
