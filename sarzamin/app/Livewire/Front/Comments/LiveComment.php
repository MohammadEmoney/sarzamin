<?php

namespace App\Livewire\Front\Comments;

use App\Models\Comment;
use App\Traits\AlertLiveComponent;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LiveComment extends Component
{
    use AlertLiveComponent;

    public $commentsCount;
    public $message;
    public $title;
    public $commentable;
    public $userName;
    public $parentCommentId;

    public function validations()
    {
        $this->validate([
            'message' => 'required|string',
            'title' => 'nullable|string|max:255',
        ]);
    }

    public function setReply($id, $userName)
    {
        $this->parentCommentId = $id;
        $this->userName = $userName;
    }

    public function submit()
    {

        if(!Auth::check()){
            $this->alert(__('messages.login_first'))->warning();
        }else{
            $this->commentable->comments()->create([
                'title' => $this->title,
                'message' => $this->message,
                'user_id' => Auth::id(),
                'parent_id' => $this->parentCommentId,
            ]);
            $this->alert(__('messages.comment_submitted_successfully'))->success();
            $this->resetForm();
        }
    }

    public function resetForm()
    {
        $this->title = null;
        $this->message = null;
        $this->parentCommentId = null;
        $this->userName = null;
    }

    public function render()
    {
        $comments = Comment::
                        where('commentable_type', get_class($this->commentable))
                        ->where('commentable_id', $this->commentable->id)
                        ->with(['children' => function($query){
                            $query->where('status' , 'allowed');
                        }, 'user'])
                        ->whereIsRoot()
                        ->allowed()
                        ->latest()
                        ->get();
        return view('livewire.front.comments.live-comment', compact('comments'));
    }
}
