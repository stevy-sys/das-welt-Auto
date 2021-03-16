<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Couverture;

class AccueilController extends Controller
{
    public function index()
    {
        $couvertures = Couverture::all();
        return view('pages.couverture',compact('couvertures'));
    }
}
