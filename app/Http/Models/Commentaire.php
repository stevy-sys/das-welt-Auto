<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $guarded = [''];
    public $timestamps = false;
    public $dates = ['created_at'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function voiture()
    {
        return $this->belongsTo('App\Http\Models\Voiture');
    }
}
