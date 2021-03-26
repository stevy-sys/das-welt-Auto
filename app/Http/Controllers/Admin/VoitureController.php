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

    public function edit($id)
    {
        $voiture = Voiture::find(intval($id));
        return view('admin.content.voiture.edit',compact('voiture'));
    }

    public function create()//Request $voiture)
    {
        return view('admin.content.voiture.add');
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


        $avant = $voiture->image;
        $touteVoitures = $voiture->photoVoitures ;
        $voiture->update($data);
        $this->storeImage($voiture);
        

        unlink('storage/'.$avant);
        usleep(250000);
        clearstatcache();
        
        foreach ($touteVoitures as $voiture) {
            unlink('storage/'.$voiture->photo);
            usleep(250000);
            clearstatcache();
        }

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

    public function store(Request $request,Voiture $voiture)
    {
        
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

        $voiture = Voiture::create($data);
        $id = intval($voiture->id) ;
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
            $data['voiture_id'] = $id;
            $voiture = PhotoVoiture::create($data);
            $this->storeImageVoiture($voiture);
        }

        if ($request['image2']) {
            $request['photo'] = $request['image2'] ;
            $data = $request->validate([
                'photo' => "image|max:5000",
            ]);
            $data['voiture_id'] = $id;
            $voiture = PhotoVoiture::create($data);
            $this->storeImageVoiture($voiture);
        }

        if ($request['image3']) {
            $request['photo'] = $request['image3'] ;
            $data = $request->validate([
                'photo' => "image|max:5000",
            ]);
            $data['voiture_id'] = $id;
            $voiture = PhotoVoiture::create($data);
            $this->storeImageVoiture($voiture);
        }


        return redirect()->route('voiture.index');
    }

    public function destroy(Voiture $voiture)
    {
        
        if($voiture){
            $avant = $voiture->image;
            $touteVoitures = $voiture->photoVoitures ;

            unlink('storage/'.$avant);
            usleep(250000);
            clearstatcache();
        
            foreach ($touteVoitures as $voiture) {
                unlink('storage/'.$voiture->photo);
                usleep(250000);
                clearstatcache();
            }
            $voiture->delete();
        }
        return redirect()->route('voiture.index');
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
