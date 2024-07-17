<?php

namespace App\Livewire\Admin\Cooperations;

use App\Models\Cooperation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LiveCooperationShow extends Component
{
    public $title;
    public $cooperation;

    public function mount(Cooperation $cooperation)
    {
        $this->cooperation = $cooperation;
        $this->title = $cooperation->name;
    }

    public function download($type)
    {
        if(Auth::user()->can('cooperation_show')){
            $cooperation = $this->cooperation;
            if($mediaItem = $cooperation->getFirstMedia($type))
                return $cooperation->getFirstMedia($type);
            $this->alert(__('messages.file_not_exists'))->error();
        }else{
            $this->alert(__('messages.not_have_access'))->error();
        }
    }

    public function render()
    {
        return view('livewire.admin.cooperations.live-cooperation-show')->extends('layouts.admin-panel')->section('content');
    }
}
