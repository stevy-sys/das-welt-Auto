<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    public function store(Request $request)
    {
       $voiture_id = intval($request->voiture_id);
       $data = $request->validate([
            'voiture_id' => "required",
            'content' => "required",
        ]);

        $data['user_id'] = Auth::user()->id ;
        $data['voiture_id'] = $voiture_id ;
        
        Commentaire::create($data);
        return redirect()->route('voiture.show',['voiture' => $data['voiture_id']]);
    }
}
