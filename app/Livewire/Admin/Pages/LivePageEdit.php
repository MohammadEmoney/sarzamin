<?php

namespace App\Livewire\Admin\Pages;

use App\Enums\EnumLanguages;
use App\Models\Category;
use App\Models\Page;
use App\Traits\AlertLiveComponent;
use App\Traits\MediaTrait;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class LivePageEdit extends Component
{
    use AlertLiveComponent;
    use MediaTrait;
    use WithFileUploads;

    public $title;
    public $page;
    public $data = [];

    public function mount(Page $page)
    {
        $this->title = __('global.edit_page');
        $this->page = $page;
        $this->data = [
            'lang' => $page->lang,
            'title' => $page->title,
            'slug' => $page->slug,
            'description' => $page->description,
        ];
        $this->data['mainImage'] = $page->getFirstMedia('mainImage');
    }

    public function validations()
    {
        $this->validate(
            [
                'data.lang' => 'required|in:' . EnumLanguages::asStringValues(),
                'data.title' => 'required|string|min:2|max:255',
                'data.slug' => 'required|unique:pages,slug,' . $this->page->id,
                'data.description' => 'required|string',
            ],
            [],
            [
                'data.lang' => __('global.lang'),
                'data.title' => __('global.title'),
                'data.slug' => __('global.slug'),
                'data.description' =>__('global.description'),
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
        // dd($this->data);
        $this->validations();
        if(!isset($this->data['mainImage']) ){
            return $this->addError('data.mainImage', __('messages.post_main_image_required'));
        }
        try {
            $this->page->update([
                'lang' => $this->data['lang'],
                'title' => $this->data['title'],
                'slug' =>  Str::slug($this->data['slug'] ?? ""),
                'description' => $this->data['description'] ?? null,
                'updated_by' => Auth::id(),
            ]);

            $this->createImage($this->page);
            $this->alert(__('messages.page_updated_successfully'))->success();
            return redirect()->to(route('admin.pages.index'));
        } catch (Exception $e) {
            $this->alert($e->getMessage())->error();
        }
       
    }
    
    public function render()
    {
        $langs = EnumLanguages::getTranslatedAll();
        $categories = Category::active()->select('title', 'id')->get();
        return view('livewire.admin.pages.live-page-edit', compact('langs', 'categories'))
            ->extends('layouts.admin-panel')
            ->section('content');
    }
}
