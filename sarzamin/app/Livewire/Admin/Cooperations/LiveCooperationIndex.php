<?php

namespace App\Livewire\Admin\Cooperations;

use App\Models\Cooperation;
use App\Traits\AlertLiveComponent;
use Livewire\Component;
use Livewire\WithPagination;

class LiveCooperationIndex extends Component
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
        $this->title = __('global.cooperations');
    }

    public function resetFilter()
    {
        $this->filter = [];
    }

    public function show($id)
    {
        return redirect()->to(route('admin.cooperations.show', ['cooperation' => $id]));
    }

    public function create()
    {
        return redirect()->to(route('admin.cooperations.create'));
    }

    public function destroy($id)
    {
        if(auth()->user()->can('cooperation_delete')){
            $cooperation = Cooperation::query()->find($id);

            if ($cooperation) {
                $cooperation->delete();
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
        return redirect()->to(route('admin.cooperations.edit', ['cooperation' => $id]));
    }

    public function changeActiveStatus($id)
    {
        $cooperation = Cooperation::find($id);
        if($cooperation){
            $cooperation->update(['is_active' => !$cooperation->is_active]);
            $this->alert(__('messages.updated_successfully'))->success();
        }
    }

    public function render()
    {
        $cooperations = Cooperation::query();
        $search = trim($this->search);
        if($search && mb_strlen($search) > 2){
            $cooperations = $cooperations->where(function($query) use ($search){
                $query->where('name', "like", "%$search%")
                    ->orWhere('phone', "like", "%$search%")
                    ->orWhere('job', "like", "%$search%")
                    ->orWhere('description', "like", "%$search%");
            });
        }
        $cooperations = $cooperations->orderBy($this->sort, $this->sortDirection)->paginate($this->paginate);

        return view('livewire.admin.cooperations.live-cooperation-index', compact('cooperations'))->extends('layouts.admin-panel')->section('content');
    }
}
