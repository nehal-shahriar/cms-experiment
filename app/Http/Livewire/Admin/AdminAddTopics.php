<?php

namespace App\Http\Livewire\Admin;

use App\Models\Topic;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddTopics extends Component
{
    public $name;
    public $slug;

    public function generateSlug(){
        $this->slug=Str::slug($this->name,'-');
    }
    public function addTopic()
    {
        $topic=new Topic();
        $topic->name=$this->name;
        $topic->slug=$this->slug;

        $topic->save();
        session()->flash('message','Topic has been created successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-topics')->layout('layouts.base');
    }
}