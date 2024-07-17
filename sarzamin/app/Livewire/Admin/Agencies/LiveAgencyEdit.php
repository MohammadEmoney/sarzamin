<?php

namespace App\Livewire\Admin\Agencies;

use App\Enums\EnumLanguages;
use App\Models\Agency;
use App\Traits\AlertLiveComponent;
use App\Traits\MediaTrait;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class LiveAgencyEdit extends Component
{
    use AlertLiveComponent;
    use MediaTrait;
    use WithFileUploads;

    public $title;
    public $agency;
    public $data = [];

    public function mount(Agency $agency)
    {
        $this->title = __('global.edit_agency');
        $this->agency = $agency;
        $this->load($agency);
    }

    public function load(Agency $agency)
    {
        $this->data = [
            'province' => $agency->province,
            'city' => $agency->city,
            'office_code' => $agency->office_code,
            'office_name' => $agency->office_name,
            'office_chief' => $agency->office_chief,
            'phone' => $agency->phone,
            'address' => $agency->address,
            'lat' => $agency->lat,
            'lng' => $agency->lng,
            'lang' => $agency->lang,
        ];
    }

    public function validations()
    {
        $this->validate(
            [
                'data.province' => 'required|string|min:2|max:255',
                'data.city' => 'required|string|min:2|max:255',
                'data.office_code' => 'required',
                'data.office_name' => 'required|string|min:2|max:255',
                'data.office_chief' => 'required|string|min:2|max:255',
                'data.phone' => 'required|regex:/^09[0-9]{9}$/',
                'data.address' => 'required|string',
                'data.lat' => 'nullable|numeric',
                'data.lng' => 'nullable|numeric',
                'data.lang' => 'required|in:' . EnumLanguages::asStringValues(),
            ],
            [],
            [
                'data.province' => __('global.province'),
                'data.city' => __('global.city'),
                'data.office_code' => __('global.office_code'),
                'data.office_name' => __('global.office_name'),
                'data.office_chief' =>__('global.office_chief'),
                'data.phone' => __('global.phone_number'),
                'data.address' => __('global.address'),
                'data.lat' => __('global.lat'),
                'data.lng' => __('global.lng'),
                'data.lang' =>__('global.lang'),
            ]
        );
    }

    public function updated($field, $value)
    {
        $this->validations();
    }

    public function submit()
    {
        try {
            $this->validations();
            $this->agency->update([
                'province' => $this->data['province'],
                'city' => $this->data['city'],
                'office_code' => $this->data['office_code'] ?? null,
                'office_name' => $this->data['office_name'] ?? null,
                'office_chief' => $this->data['office_chief'] ?? null,
                'phone' => $this->data['phone'],
                'address' => $this->data['address'],
                'lat' => $this->data['lat'] ?? null,
                'lng' => $this->data['lng'] ?? null,
                'lang' => $this->data['lang'] ?? null,
            ]);

            $this->alert(__('messages.agency_updated_successfully'))->success();
            return redirect()->to(route('admin.agencies.index'));
        } catch (Exception $e) {
            $this->alert($e->getMessage())->error();
        } catch (ValidationException $e) {
            $this->alert($e->getMessage())->error();
        }
    }
    
    public function render()
    {
        $langs = EnumLanguages::getTranslatedAll();
        return view('livewire.admin.agencies.live-agency-edit', compact('langs'))
            ->extends('layouts.admin-panel')->section('content');
    }
}
