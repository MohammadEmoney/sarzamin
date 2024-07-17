<?php

namespace App\Livewire\Front\Pages;

use App\Models\Agency;
use App\Traits\AlertLiveComponent;
use Livewire\Component;
use Livewire\WithPagination;

class LiveAgencies extends Component
{
    use AlertLiveComponent;
    use WithPagination;

    public $paginate = 10;
    public $sort = 'created_at';
    public $sortDirection = 'DESC';
    public $search;
    public $title;
    public $filter = [];

    public function mount()
    {
        $this->title = __('global.agencies');
    }

    public function resetFilter()
    {
        $this->filter = [];
    }

    public function render()
    {
        $agencies = Agency::query();
        $search = trim($this->search);
        if($search && mb_strlen($search) > 2){
            $agencies = $agencies->where(function($query) use ($search){
                $query->where('province', "like", "%$search%")
                    ->orWhere('city', "like", "%$search%")
                    ->orWhere('office_code', "like", "%$search%")
                    ->orWhere('office_name', "like", "%$search%")
                    ->orWhere('office_chief', "like", "%$search%")
                    ->orWhere('phone', "like", "%$search%")
                    ->orWhere('address', "like", "%$search%");
            });
        }
        $agencies = $agencies->orderBy($this->sort, $this->sortDirection)->paginate($this->paginate);
        return view('livewire.front.pages.live-agencies', compact('agencies'))->extends('layouts.front')->section('content');
    }
}
