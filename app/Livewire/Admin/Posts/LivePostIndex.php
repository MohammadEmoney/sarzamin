<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Post;
use App\Traits\AlertLiveComponent;
use Livewire\Component;
use Livewire\WithPagination;

class LivePostIndex extends Component
{
    use AlertLiveComponent, WithPagination;

    protected $listeners = [ 'destroy'];

    public $type;
    public $segment;
    public $paginate = 10;
    public $sort = 'created_at';
    public $sortDirection = 'DESC';
    public $search;
    public $title;
    public $filter = [];

    public function mount()
    {
        $this->segment = request()->segment(3); 
        $this->type = request()->segment(3) === 'posts' ? 'article' : 'news';
        $this->title = request()->segment(3) === 'posts' ? __('global.articles') : __('global.news');
    }

    public function resetFilter()
    {
        $this->filter = [];
    }

    public function show($id)
    {
        // return redirect()->to(route('admin.posts.show', $id));
    }

    public function create()
    {
        return redirect()->to(route('admin.'. $this->segment .'.create'));
    }

    public function destroy($id)
    {
        if(auth()->user()->can('post_delete')){
            $post = Post::query()->find($id);

            if ($post) {
                $post->delete();
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
        return redirect()->to(route('admin.'. $this->segment .'.edit', ['post' => $id]));
    }

    public function changeActiveStatus($id)
    {
        $post = Post::find($id);
        if($post){
            $post->update(['is_active' => !$post->is_active]);
            $this->alert(__('messages.updated_successfully'))->success();
        }
    }

    public function render()
    {
        $posts = Post::query()->where('type', $this->type)->with(['categories', 'mainCategory']);
        $search = trim($this->search);
        if($search && mb_strlen($search) > 2){
            $posts = $posts->where(function($query) use ($search){
                $query->where('title', "like", "%$search%")
                    ->orWhere('slug', "like", "%$search%");
                    // ->orWhere('description', "like", "%$search%")
                    // ->orWhere('summary', "like", "%$search%");
            });
        }
        $posts = $posts->orderBy($this->sort, $this->sortDirection)->paginate($this->paginate);

        return view('livewire.admin.posts.live-post-index', compact('posts'))->extends('layouts.admin-panel')->section('content');
    }
}
