<?php

namespace App\Livewire\Front\Components;

use App\Traits\LayoutTrait;
use Livewire\Component;

class LiveBenefits extends Component
{
    use LayoutTrait;

    public function render()
    {
        $layoutGroup = $this->getLayoutGroup(null,'main-benefit');
        $layouts = $this->getLayouts($layoutGroup);
        return view('livewire.front.components.live-benefits', compact('layouts', 'layoutGroup'));
    }
}
