<?php

namespace App\Livewire\Admin\Agencies;

use App\Models\Agency;
use App\Traits\AlertLiveComponent;
use Livewire\Component;
use Livewire\WithPagination;

class LiveAgencyIndex extends Component
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
        $this->title = __('global.agencies');
    }

    public function resetFilter()
    {
        $this->filter = [];
    }

    public function show($id)
    {
        // return redirect()->to(route('admin.agencies.show', $id));
    }

    public function create()
    {
        return redirect()->to(route('admin.agencies.create'));
    }

    public function destroy($id)
    {
        if(auth()->user()->can('agency_delete')){
            $agency = Agency::query()->find($id);

            if ($agency) {
                $agency->delete();
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
        return redirect()->to(route('admin.agencies.edit', ['agency' => $id]));
    }

    public function changeActiveStatus($id)
    {
        $agency = Agency::find($id);
        if($agency){
            $agency->update(['is_active' => !$agency->is_active]);
            $this->alert(__('messages.updated_successfully'))->success();
        }
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

        return view('livewire.admin.agencies.live-agency-index', compact('agencies'))->extends('layouts.admin-panel')->section('content');
    }
}
