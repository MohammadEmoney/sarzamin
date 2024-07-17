<?php

namespace App\Livewire\Admin\Posts;

use App\Enums\EnumLanguages;
use App\Models\Category;
use App\Models\Post;
use App\Traits\AlertLiveComponent;
use App\Traits\MediaTrait;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class LivePostCreate extends Component
{
    use AlertLiveComponent;
    use MediaTrait;
    use WithFileUploads;

    public $type;
    public $title;
    public $post;
    public $data = [];

    public function mount()
    {
        $this->type = request()->segment(3) === 'posts' ? 'article' : 'news';
        $this->title = request()->segment(3) === 'posts' ? __('global.create_article') : __('global.create_news');
    }

    public function validations()
    {
        $this->validate(
            [
                'data.lang' => 'required|in:' . EnumLanguages::asStringValues(),
                'data.title' => 'required|string|min:2|max:255',
                'data.slug' => 'required|unique:posts,slug',
                'data.category_id' => 'required|exists:categories,id',
                'data.categories' => 'nullable|array',
                'data.categories.*' => 'required|exists:categories,id',
                'data.summary' => 'required|string',
                'data.description' => 'required|string',
            ],
            [],
            [
                'data.lang' => __('global.lang'),
                'data.title' => __('global.title'),
                'data.slug' => __('global.slug'),
                'data.summary' => __('global.summary'),
                'data.description' =>__('global.description'),
                'data.category_id' =>__('global.main_category'),
                'data.categories' =>__('global.categories'),
            ]
        );
    }

    public function updated($field, $value)
    {
        if($field === 'data.title')
            $this->data['slug'] = Str::slug($value);
        $this->dispatch('select2Initiation');
        // $this->dispatch('ckeditorInitiation');
        Log::info('test');
        $this->validations();
    }

    public function submit()
    {
        $this->validations();
        if(!isset($this->data['mainImage']) ){
            return $this->addError('data.mainImage', __('messages.post_main_image_required'));
        }
        try {
            $post =  Post::create([
                'type' => $this->type,
                'lang' => $this->data['lang'],
                'title' => $this->data['title'],
                'slug' =>  Str::slug($this->data['slug'] ?? ""),
                'summary' => $this->data['summary'] ?? 0,
                'description' => $this->data['description'] ?? null,
                'is_active' => true,
                'created_by' => Auth::id(),
            ]);

            $post->mainCategory()->attach($this->data['category_id'], ['is_main' => true]);
            $post->categories()->attach($this->data['categories'] ?? []);
    
            $this->createPostImage($post);
            $this->alert(__('messages.post_created_successfully'))->success();
            return redirect()->to(route('admin.posts.index'));
        } catch (Exception $e) {
            $this->alert($e->getMessage())->error();
        }
       
    }

    public function render()
    {
        $langs = EnumLanguages::getTranslatedAll();
        $categories = Category::active()->select('title', 'id')->get();
        return view('livewire.admin.posts.live-post-create', compact('langs', 'categories'))
            ->extends('layouts.admin-panel')
            ->section('content');
    }
}
