<?php

namespace App\Http\Controllers;

use App\Http\Models\Message;
use App\Http\Models\Voiture;
use Illuminate\Http\Request;
use App\Http\Models\Categorie;
use App\Http\Models\Couverture;
use App\Http\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function couverture()
    {
        $couvertures = Couverture::all();
        return view('pages.couverture',compact('couvertures'));
    }

    public function accueil()
    {
        return view('pages.accueil.index');
    }

    public function rechercheCategorie($recherche)
    {
        $categorie = Categorie::where('name',$recherche)->first();
        $voitures = $categorie->voitures ;
        return view('pages.recherche.index',compact('voitures'));
    }

    public function produit()
    {
        $voitures = Voiture::paginate(3);
        return view('pages.produits.index',compact('voitures'));
    }

    public function showProduit($produit)
    {
        $voiture = Voiture::find(intval($produit));
        return view('pages.produits.show',compact('voiture'));
    }

    public function contact()
    {
        return view('pages.contact.index');
    }

    public function commenter(Request $request, int $produit)
    {
        $voiture_id = intval($produit);
        $data = $request->validate([
            'content' => "required",
        ]);

        $data['user_id'] = Auth::user()->id ;
        $data['voiture_id'] = $voiture_id ;
        
        Commentaire::create($data);
        return redirect()->route('produit.show',['produit' => $data['voiture_id']]);
    }

    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'name' => "required",
            'email' => "required|email",
            'message' => "required"
        ]);

        Message::create($data);
        return redirect()->route('contact');
    }
}
