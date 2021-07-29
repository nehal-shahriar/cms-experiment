<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class HomeComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function updated(){
        $this->validateOnly([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
        ]);
    }

    public function sendMessage(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',

        ]);
        
        $contact=new Contact();
        $contact->name=$this->name;
        $contact->email=$this->email;
        $contact->phone=$this->phone;
        $contact->message=$this->message;
        $contact->save();
        
        session()->flash('message', 'Thanks, your message has been sent successfully!');

    }

    public function render()
    {
        $bloglist = Blog::orderBy('created_at','DESC')->get()->take(3);
        return view('livewire.home-component',['bloglist'=>$bloglist])->layout('layouts.base');
    }
}
