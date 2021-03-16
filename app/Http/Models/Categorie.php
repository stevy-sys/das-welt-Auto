<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function voitures()
    {
        return $this->hasMany('App\Http\Models\Voiture');
    }
}
