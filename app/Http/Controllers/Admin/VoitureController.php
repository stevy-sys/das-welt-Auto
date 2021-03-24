<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Voiture;
use Illuminate\Http\Request;
use App\Http\Models\PhotoVoiture;
use App\Http\Controllers\Controller;

class VoitureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $voitures = Voiture::all();
        return view('admin.content.voiture.index',compact('voitures'));
    }

    public function show(int $blog)
    {
        $article = Blog::find($blog)->first();
        return view('admin.nav.blog.show',compact('article'));
    }

    public function create(Request $voiture)
    {
        if($voiture){
            $voiture = Voiture::find($voiture)->first();
            //$id = intval($voiture['id']);
            //$voiture = Voiture::where('id',$id)->first();
            //dd($voiture->categorie);
            return view('admin.content.voiture.create',compact('voiture'));
        }
        return view('admin.content.nav.blog.add');
    }

    public function update(Voiture $voiture , Request $request)
    {
        $id = $voiture->id ;
        $data = $request->validate([
            'categorie_id' => "required",
            'nom' => "required",
            'type' => "required",
            'vitesse' => "required",
            'place' => "required",
            'image' => "image|required|max:5000",
            'annee' => "required",
            'moteur' => "required",
            'description' => "required"
        ]);

        $data['vitesse'] = intval($data['vitesse']);
        $data['categorie_id'] = intval($data['categorie_id']);
        $data['annee'] = intval($data['annee']);
        $data['place'] = intval($data['place']);
        
        $voiture->update($data);
        $this->storeImage($voiture);

        if ($request['image0']) {
            $request['photo'] = $request['image0'] ;
            $data = $request->validate([
                'photo' => "image|max:5000",
            ]);
            $data['voiture_id'] = $id;
            $voiture = PhotoVoiture::create($data);
            $this->storeImageVoiture($voiture);
        }
        if ($request['image1']) {
            $request['photo'] = $request['image1'] ;
            $data = $request->validate([
                'photo' => "image|max:5000",
            ]);
            $data['voiture_id'] = $id ;
            $voiture = PhotoVoiture::create($data);
            $this->storeImageVoiture($voiture);
        }
        if ($request['image2']) {
            $request['photo'] = $request['image2'] ;
            $data = $request->validate([
                'photo' => "image|max:5000",
            ]);
            $data['voiture_id'] = $id ;
            $voiture = PhotoVoiture::create($data);
            $this->storeImageVoiture($voiture);
        }
        if ($request['image3']) {
            $request['photo'] = $request['image3'] ;
            $data = $request->validate([
                'photo' => "image|max:5000",
            ]);
            $data['voiture_id'] = $id ;
            $voiture = PhotoVoiture::create($data);
            $this->storeImageVoiture($voiture);
        }
        return redirect()->route('voiture.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => "required",
            'title' => "required",
            'date' => "required",
            'content' => "required",
            'animate' => "required",
            'img' => "required|image|max:5000"
        ]);
        $blog = Blog::create($data);
        $this->storeImage($blog);
        return redirect()->route('blog.index');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index');
    }

    private function storeImage(Voiture $voiture)
    {
       if ($voiture->image) {
           $voiture->update([
               'image' => $voiture->image->store('voiture','public')
           ]);
       }
    }

    private function storeImageVoiture(PhotoVoiture $voiture)
    {
       if ($voiture->photo) {
           $voiture->update([
               'photo' => $voiture->photo->store('photoVoiture','public')
           ]);
       }
    }
}
