<?php

namespace App\Livewire\Front\Components;

use App\Models\Post;
use App\Traits\LayoutTrait;
use Livewire\Component;

class LiveBlogCards extends Component
{
    use LayoutTrait;
    
    public function render()
    {
        $posts = Post::active()->lang()->latest()->take(3)->get();
        return view('livewire.front.components.live-blog-cards', compact('posts'));
    }
}
