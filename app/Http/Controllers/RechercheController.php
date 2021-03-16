<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Categorie;

class RechercheController extends Controller
{
    public function rechercheCategorie($recherche)
    {
        $categorie = Categorie::where('name',$recherche)->first();
        $voitures = $categorie->voitures ;
        return view('pages.recherche.index',compact('voitures'));
    }
}
