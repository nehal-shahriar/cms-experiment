<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class AdminContact extends Component
{
    use WithPagination;
    public function render()
    {
        $contacts = Contact::paginate(10);
        return view('livewire.admin.admin-contact',['contacts'=>$contacts])->layout('layouts.base');
    }
}
