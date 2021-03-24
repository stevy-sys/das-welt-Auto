<?php

namespace App\Http\Controllers\Admin;

use App\Mail\MessageMail;
use App\Http\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $message = Message::all(['name','id']);
        return view('admin.nav.message.index',compact('message'));
    }

    public function show(Message $message)
    {
        $message = Message::find($message)->first();
        return view('admin.nav.message.show',compact('message'));
    }

     /*public function create(Request $experience)
    {
        if($experience['id']){
            $experience = $experience['id'];
            $experience = Experience::where('id',$experience)->first();
            return view('admin.content.experience.create',compact('experience'));
        }
        return view('admin.content.Experience.add');
    }*/

    /*public function update(Experience $experience , Request $request)
    {
       $data = $request->validate([
            'animate' => "required",
            'color' => "required",
            'title' => "required",
            'date' => "required",
            'content' => "required",
        ]);

        $experience->update($data);
        return redirect()->route('experience.index');
    }*/

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'name' => "required",
            'email' => "required|email",
            'subject' => "required",
            'message' => "required",
        ]);

        Mail::to($data['email'])->send(new MessageMail());
        return redirect()->back();
    }

    /*public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('experience.index');
    }*/
}
