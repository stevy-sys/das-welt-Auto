<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Models\Couverture;
use App\Http\Controllers\Controller;

class CouvertureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $couvertures = Couverture::all();
        return view('admin.content.couverture.index',compact('couvertures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.couverture.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Couverture $couverture)
    {
         $data = $request->validate([
            'image' => "image|required|max:5000",
            'animation' => "required",
            'description' => "required",
            'titre' => "required",
            'redirection' => "required"
        ]);


        $couverture = Couverture::create($data);
        $this->storeImage($couverture);
        return redirect()->route('couverture.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $couverture = Couverture::find($id);
        return view('admin.content.couverture.edit',compact('couverture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Couverture $couverture)
    {
        $data = $request->validate([
            'image' => "image|required|max:5000",
            'animation' => "required",
            'description' => "required",
            'titre' => "required",
            'redirection' => "required"
        ]);
        $avant = $couverture->image;
        $couverture->update($data);
        unlink('storage/'.$avant);
        $this->storeImage($couverture);
        return redirect()->route('couverture.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Couverture $couverture)
    {
        if ($couverture) {
            $avant = $couverture->image;
            $couverture->delete();
            unlink('storage/'.$avant);
            return redirect()->route('couverture.index');
        }
    }

    private function storeImage(Couverture $couverture)
    {
       if ($couverture->image) {
           $couverture->update([
               'image' => $couverture->image->store('couverture','public')
           ]);
       }
    }
}
