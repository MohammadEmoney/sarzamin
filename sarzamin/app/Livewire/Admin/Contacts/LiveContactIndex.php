<?php

namespace App\Livewire\Admin\Contacts;

use App\Models\Contact;
use App\Traits\AlertLiveComponent;
use Livewire\Component;
use Livewire\WithPagination;

class LiveContactIndex extends Component
{
    use AlertLiveComponent, WithPagination;

    protected $listeners = [ 'destroy'];

    public $paginate = 10;
    public $sort = 'created_at';
    public $sortDirection = 'DESC';
    public $search;
    public $title;
    public $filter = [];

    public function mount()
    {
        $this->title = __('global.contacts');
    }

    public function resetFilter()
    {
        $this->filter = [];
    }

    public function show($id)
    {
        return redirect()->to(route('admin.contacts.show', ['contact' => $id]));
    }

    public function create()
    {
        return redirect()->to(route('admin.contacts.create'));
    }

    public function destroy($id)
    {
        if(auth()->user()->can('contact_delete')){
            $contact = Contact::query()->find($id);

            if ($contact) {
                $contact->delete();
                $this->alert(__('messages.post_deleted'))->success();
            }
            else{
                $this->alert(__('messages.post_not_deleted'))->error();
            }
        }else{
            $this->alert(__('messages.not_have_access'))->error();
        }
    }

    public function edit($id)
    {
        return redirect()->to(route('admin.contacts.edit', ['contact' => $id]));
    }

    public function changeActiveStatus($id)
    {
        $contact = Contact::find($id);
        if($contact){
            $contact->update(['is_active' => !$contact->is_active]);
            $this->alert(__('messages.updated_successfully'))->success();
        }
    }

    public function render()
    {
        $contacts = Contact::query();
        $search = trim($this->search);
        if($search && mb_strlen($search) > 2){
            $contacts = $contacts->where(function($query) use ($search){
                $query->where('name', "like", "%$search%")
                    ->orWhere('phone', "like", "%$search%")
                    ->orWhere('subject', "like", "%$search%")
                    ->orWhere('description', "like", "%$search%");
            });
        }
        $contacts = $contacts->orderBy($this->sort, $this->sortDirection)->paginate($this->paginate);

        return view('livewire.admin.contacts.live-contact-index', compact('contacts'))->extends('layouts.admin-panel')->section('content');
    }
}
