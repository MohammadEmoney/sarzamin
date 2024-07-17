<?php

namespace App\Livewire\Admin\Contacts;

use App\Models\Contact;
use Livewire\Component;

class LiveContactShow extends Component
{
    public $title;
    public $contact;

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
        $this->title = $contact->name;
    }

    public function render()
    {
        return view('livewire.admin.contacts.live-contact-show')->extends('layouts.admin-panel')->section('content');
    }
}
