<?php

namespace App\Http\Livewire\Admin;

use App\Models\Topic;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTopics extends Component
{
    use WithPagination;
    public function deletetopic($id){
        $topic=Topic::find($id);
        $topic->delete();
        session()->flash('message','Topic has been deleted successfully');
    }
    public function render()
    {
        $topics=Topic::paginate(10);
        return view('livewire.admin.admin-topics',['topics'=>$topics])->layout('layouts.base');
    }
}
