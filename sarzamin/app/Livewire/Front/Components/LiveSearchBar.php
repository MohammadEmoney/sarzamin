<?php

namespace App\Livewire\Front\Components;

use App\Traits\AlertLiveComponent;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LiveSearchBar extends Component
{
    use AlertLiveComponent;

    public $search = "";

    public function validations()
    {
        $this->validate(
            [
                'search' => 'required|string',
            ],
            [
                'search' => __('messages.fill_search')
            ],
            [
                'search' => __('global.search'),
            ]
        );
    }

    public function submit()
    {
        try {
            $this->validations();
            return redirect()->to(route('front.search', ['search' => $this->search]));
        } catch (ValidationException $e) {
            $this->alert($e->getMessage())->error();
        }
    }

    public function render()
    {
        return view('livewire.front.components.live-search-bar');
    }
}
