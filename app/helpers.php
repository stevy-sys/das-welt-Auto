<?php

use App\Http\Models\Categorie;
use Illuminate\Support\Facades\DB;

function AllCategorie()
{
    $categorie = Categorie::all();
    return $categorie ;
}

function configAll()
{
    $config = DB::table('configs')->first();
    return $config ;
}