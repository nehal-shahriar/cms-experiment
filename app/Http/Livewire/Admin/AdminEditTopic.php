<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Topic;
use Illuminate\Support\Str;

class AdminEditTopic extends Component
{
    public $topic_slug;
    public $topic_id;
    public $name;
    public $slug;

    public function mount($topic_slug)
    {
        $this->topic_slug = $topic_slug;
        $topic = Topic::where('slug',$topic_slug)->first();
        $this->topic_id = $topic->id;
        $this->name = $topic->name;
        $this->slug = $topic->slug;
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:topics'
        ]);
    }
    public function updateTopic()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:topics'
        ]);
        $topic = Topic::find($this->topic_id);
        $topic->name = $this->name;
        $topic->slug = $this->slug;
        $topic->save();
        session()->flash('message','topic has been updated');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-topic')->layout('layouts.base');
    }
}