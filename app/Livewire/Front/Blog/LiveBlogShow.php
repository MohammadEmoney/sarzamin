<?php

namespace App\Livewire\Front\Blog;

use App\Models\Post;
use Livewire\Component;

class LiveBlogShow extends Component
{
    public $post;
    public $title;

    public function mount(Post $post)
    {
        $this->post = $post->load(['mainCategory', 'createdBy', 'media', 'comments' => function($query){
            $query->where('status', \App\Enums\EnumCommentStatus::ALLOWED);
        }])->loadCount(['comments' => function($query){
            $query->where('status', \App\Enums\EnumCommentStatus::ALLOWED);
        }]);
        $this->title = $post->title;
        $this->post->increment('views');
    }

    public function render()
    {
        return view('livewire.front.blog.live-blog-show')
            ->extends('layouts.front')->section('content');
    }
}
