<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    public function store(Request $request)
    {
       //dd(Auth::user()->id);
       //dd($request->content);
       //dd($request->id_voiture);
       /*$id_voiture = intval($request->id_voiture);

       $data = $request->validate([
            'id_voiture' => "required",
            'content' => "required",
            
        ]);

        dd('ok');
        $commentaire = Education::create($data);
        return redirect()->route('education.index');*/
    }
}
