<?php

namespace App\Livewire\Front\Pages;

use App\Models\Contact;
use App\Traits\AlertLiveComponent;
use Exception;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LiveContactUs extends Component
{
    use AlertLiveComponent;
    
    public $data = [];
    public $title;

    public function mount()
    {
        $this->title = __('global.contact_us');
    }

    public function validations()
    {
        $this->validate(
            [
                'data.name' => 'required|string|min:2|max:255',
                'data.phone' => 'required|regex:/^09[0-9]{9}$/',
                'data.subject' => 'required|string|min:2|max:255',
                'data.description' => 'nullable|string',
            ],
            [],
            [
                'data.name' => __('global.username'),
                'data.phone' => __('global.phone_number'),
                'data.subject' => __('global.subject'),
                'data.description' =>__('global.description'),
            ]
        );
    }

    public function submit()
    {
        try {
            $this->validations();
            $contact = Contact::create([
                'name' => $this->data['name'],
                'phone' => $this->data['phone'],
                'subject' => $this->data['subject'],
                'description' => $this->data['description'] ?? null,
            ]);

            $this->alert(__('messages.contact_us_success'))->success();
            $this->reset('data');
        } catch (ValidationException $e) {
            $this->alert($e->getMessage())->error();
        } catch (Exception $e) {
            $this->alert($e->getMessage())->error();
        }
    }

    public function render()
    {
        return view('livewire.front.pages.live-contact-us')->extends('layouts.front')->section('content');
    }
}
