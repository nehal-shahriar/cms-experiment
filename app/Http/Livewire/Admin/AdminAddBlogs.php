<?php

namespace App\Http\Livewire\Admin;
use App\Models\Blog;
use App\Models\Topic;
use Carbon\Carbon;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddBlogs extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $content;
    public $image;
    public $topic_id;
    public $topiclist;
    
   

    public function generateSlug(){
        $this->slug=Str::slug($this->title,'-');
    }

    
    public function addBlog()
    {
        $blog=new Blog();
        $blog->title=$this->title;
        $blog->slug=$this->slug;
        $blog->content=$this->content;
        $imageName=Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('blogs',$imageName);
        $blog->image=$imageName;
        $blog->save();
        //$blog->topics()->attach($this->topiclist);
        session()->flash('message','Blog has been created successfully');
        
    }
    public function render()
    {
        $topics=Topic::all();
        return view('livewire.admin.admin-add-blogs',['topics'=>$topics])->layout('layouts.base');
    }
}
