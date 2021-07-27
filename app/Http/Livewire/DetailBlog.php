<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class DetailBlog extends Component
{
    public $title;
    public $content;
    public $urlslug;
    public $images;
    public $date;

    public function mount($urlslug = null)
    {
        $this->retrieveContent($urlslug);
    }

    public function retrieveContent($urlslug)
    {
        // Get home page if slug is empty
        
            //Get the page according to the slug value
            $data = Blog::where('slug', $urlslug)->first();

            // If we can't retireve anything from slug value(slug is not present in db)

        $this->title = $data->title;
        $this->content = $data->content;
        $this->images = $data->images;
        $this->date = $data->created_at;
    }
    public function render()
    {
        $bloglist = Blog::orderBy('created_at','DESC')->get()->take(3);
        return view('livewire.detail-blog',['bloglist'=>$bloglist])->layout('layouts.base');
    }
}