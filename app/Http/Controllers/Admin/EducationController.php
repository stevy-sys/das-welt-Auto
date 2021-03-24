<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Models\Education;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    } 
    
    public function index()
    {
        $education = Education::all();
        return view('admin.content.education.index',compact('education'));
    }

     public function create(Request $education)
    {
        if($education['id']){
            $education = $education['id'];
            $education = Education::where('id',$education)->first();
            return view('admin.content.education.create',compact('education'));
        }
        return view('admin.content.education.add');
    }

    public function update(Education $education , Request $request)
    {
       $data = $request->validate([
            'id_heading' => "required",
            'title' => "required",
            'id_collapse' => "required",
            'content' => "required",
        ]);

        $education->update($data);
        return redirect()->route('education.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_heading' => "required",
            'title' => "required",
            'id_collapse' => "required",
            'content' => "required",
        ]);
        $education = Education::create($data);
        return redirect()->route('education.index');
    }

    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('education.index');
    }
}
