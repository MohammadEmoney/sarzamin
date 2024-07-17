<?php

namespace App\Livewire\Admin\Comments;

use App\Models\Comment;
use Livewire\Component;

class LiveCommentShow extends Component
{
    public $comment;
    public $title;

    public function mount(Comment $comment)
    {
        $this->title = $comment->title ?: __('global.comment');
        $this->comment = $comment->load(['descendants']);
    }

    public function render()
    {
        return view('livewire.admin.comments.live-comment-show')->extends('layouts.admin-panel')->section('content');
    }
}
