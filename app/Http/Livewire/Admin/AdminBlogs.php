<?php
namespace App\Http\Livewire\Admin;
use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBlogs extends Component
{
    use WithPagination;
    
    public function render()
    {
        $blogs=Blog::paginate(10);
        return view('livewire.admin.admin-blogs', ['blogs'=>$blogs])->layout('layouts.base');
    }
}

