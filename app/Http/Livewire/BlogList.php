<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogList extends Component
{
    use WithPagination;
    public function render()
    {
        $bloglist = Blog::orderBy('created_at','DESC')->get()->take(5);
        return view('livewire.blog-list',['bloglist'=>$bloglist])->layout('layouts.base');
    }
}