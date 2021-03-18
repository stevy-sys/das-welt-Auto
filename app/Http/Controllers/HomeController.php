<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function message()
    {
        return view('auth.message');
    }

    public function favoris()
    {
        return view('auth.favoris');
    }

    public function commentaire()
    {
        return view('auth.commentaire');
    }
}
