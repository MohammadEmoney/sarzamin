<?php

namespace App\Livewire\Front\Pages;

use App\Models\Cooperation;
use App\Traits\AlertLiveComponent;
use App\Traits\MediaTrait;
use Exception;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class LiveCooperation extends Component
{
    use AlertLiveComponent;
    use WithFileUploads;
    use MediaTrait;

    public $data = [];
    public $title;

    public function mount()
    {
        $this->title = __('global.cooperation');
    }

    public function validations()
    {
        $this->validate(
            [
                'data.name' => 'required|string|min:2|max:255',
                'data.phone' => 'required|regex:/^09[0-9]{9}$/',
                'data.job' => 'required|string|min:2|max:255',
                'data.resume' => 'required|max:4096',
                'data.employmentForm' => 'required|max:4096',
                'data.description' => 'nullable|string',
            ],
            [],
            [
                'data.name' => __('global.username'),
                'data.phone' => __('global.phone_number'),
                'data.job' => __('global.desired_job'),
                'data.resume' => __('global.upload_resume'),
                'data.employmentForm' =>__('global.employment_form'),
                'data.description' =>__('global.description'),
            ]
        );
    }

    public function submit()
    {
        try {
            $this->validations();
            $cooperation = Cooperation::create([
                'name' => $this->data['name'],
                'phone' => $this->data['phone'],
                'job' => $this->data['job'],
                'description' => $this->data['description'] ?? null,
            ]);

            $this->createImage($cooperation, 'resume');
            $this->createImage($cooperation, 'employmentForm');
            $this->alert(__('messages.cooperate_success'))->success();
            $this->reset('data');
        } catch (ValidationException $e) {
            $this->alert($e->getMessage())->error();
        } catch (Exception $e) {
            $this->alert($e->getMessage())->error();
        }
    }

    public function render()
    {
        return view('livewire.front.pages.live-cooperation')->extends('layouts.front')->section('content');
    }
}
