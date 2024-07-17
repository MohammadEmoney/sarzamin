<?php

namespace App\Livewire\Admin\Comments;

use App\Enums\EnumCommentStatus;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Post;
use App\Traits\AlertLiveComponent;
use Livewire\Component;
use Livewire\WithPagination;

class LiveCommentIndex extends Component
{
    use AlertLiveComponent, WithPagination;

    protected $listeners = [ 'destroy'];

    public $paginate = 10;
    public $sort = 'created_at';
    public $sortDirection = 'DESC';
    public $search;
    public $title;
    public $type;
    public $filter = [];

    public function mount()
    {
        $this->title = __('global.comments');
        $this->type = request()->segments()[2] ?? null;
        switch ($this->type) {
            case 'posts':
                $this->type = Post::class;
                break;
            case 'pages':
                $this->type = Page::class;
                break;
            default:
                return abort(404);
        }
    }

    public function resetFilter()
    {
        $this->filter = [];
    }

    public function show($id)
    {
        return redirect()->to(route('admin.posts.comments.show', ['comment' => $id]));
    }

    public function create()
    {
        return redirect()->to(route('admin.comments.create'));
    }

    public function destroy($id)
    {
        if(auth()->user()->can('comment_delete')){
            $comment = Comment::query()->find($id);

            if ($comment) {
                $comment->delete();
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
        return redirect()->to(route('admin.comments.edit', ['comment' => $id]));
    }

    public function changeActiveStatus($id)
    {
        $comment = Comment::find($id);
        if($comment){
            $comment->update(['status' => $this->status]);
            $this->alert(__('messages.updated_successfully'))->success();
        }
    }

    public function render()
    {
        $comments = Comment::query()->where('commentable_type', $this->type)->with(['commentable'])->whereIsRoot();
        $search = trim($this->search);
        if($search && mb_strlen($search) > 2){
            $comments = $comments->where(function($query) use ($search){
                $query->where('title', "like", "%$search%")
                    ->orWhere('message', "like", "%$search%");
                    // ->orWhere('description', "like", "%$search%")
                    // ->orWhere('summary', "like", "%$search%");
            });
        }
        $comments = $comments->orderBy($this->sort, $this->sortDirection)->paginate($this->paginate);
        $statuses = EnumCommentStatus::getTranslatedAll();
        return view('livewire.admin.comments.live-comment-index', compact('comments', 'statuses'))->extends('layouts.admin-panel')->section('content');
    }
}
