<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoVoiture extends Model
{
    protected $guarded = [''];
    public function Voiture()
    {
        return $this->belongsTo('App\Http\Models\Voiture');
    }
}
