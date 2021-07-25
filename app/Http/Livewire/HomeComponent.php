<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $bloglist = Blog::orderBy('created_at','DESC')->get()->take(3);
        return view('livewire.home-component',['bloglist'=>$bloglist])->layout('layouts.base');
    }
}
