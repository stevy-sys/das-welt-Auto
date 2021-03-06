<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $guarded = [''];
    public function categorie()
    {
        return $this->belongsTo('App\Http\Models\Categorie');
    }

    public function photoVoitures()
    {
        return $this->hasMany('App\Http\Models\PhotoVoiture');
    }

    public function commentaire()
    {
        return $this->hasMany('App\Http\Models\Commentaire');
    }
}
