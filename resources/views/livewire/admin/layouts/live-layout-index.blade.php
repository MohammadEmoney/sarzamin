<div class="container-fluid">
    <livewire:admin.components.live-breadcrumb :items="[['title' => $title]]" />
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
                <h5 class="card-title fw-semibold mb-4">{{ $title }}</h5>
                <button class="btn btn-sm btn-info" wire:click="create">{{ __('global.create_layout') }}</button>
            </div>
            <div class="table-responsive">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control btn-info" wire:model.live.debounce.600="search" placeholder="{{ __('global.search') }} ...">
                    </div>
                    <div class="col-md-2">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFilter" wire:ignore>
                                    <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
                                        {{ __('global.filter') }}:
                                    </button>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12">
                        <div id="collapseFilter" class="accordion-collapse collapse" aria-labelledby="headingFilter" data-bs-parent="#accordionExample" wire:ignore.self>
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <button class="btn btn-info" wire:click="resetFilter()" type="button">{{ __('global.reset_filter') }}</button>
                                    </div>
                                </div>
                                {{-- <div class="row p-3">
                                    <div class="blayout col-md-6 px-0 py-2 text-center">
                                        <span>نوع سفارش:</span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.layout_type" name="layoutType" id="inlineRadio1" value="tuition">
                                            <label class="form-check-label" for="inlineRadio1">نمایش شهریه ها</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.layout_type" name="layoutType" id="inlineRadio2" value="book">
                                            <label class="form-check-label" for="inlineRadio2">نمایش کتاب ها</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.layout_type" name="layoutType" id="inlineRadio3" value="">
                                            <label class="form-check-label" for="inlineRadio3">نمایش همه</label>
                                        </div>
                                    </div>
                                    <div class="blayout col-md-6 p-2 text-center">
                                        <span>نوع پرداخت:</span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.payment_type" name="paymentType" id="paymentType1" value="installment">
                                            <label class="form-check-label" for="paymentType1">نمایش اقساطی</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.payment_type" name="paymentType" id="paymentType2" value="full">
                                            <label class="form-check-label" for="paymentType2">نمایش یکجا</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.payment_type" name="paymentType" id="paymentType3" value="">
                                            <label class="form-check-label" for="paymentType3">نمایش همه</label>
                                        </div>
                                    </div>
                                    <div class="blayout col-md-6 px-0 py-2 text-center">
                                        <span>وضعیت پرداخت:</span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.payment_status" name="paymentStatus" id="paymentStatus1" value="debt">
                                            <label class="form-check-label" for="paymentStatus1">نمایش بدهکار</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.payment_status" name="paymentStatus" id="paymentStatus2" value="clear">
                                            <label class="form-check-label" for="paymentStatus2">نمایش تسویه</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.payment_status" name="paymentStatus" id="paymentStatus3" value="">
                                            <label class="form-check-label" for="paymentStatus3">نمایش همه</label>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('global.title') }}</th>
                            <th scope="col">{{ __('global.count_list') }}</th>
                            <th scope="col">{{ __('global.lang') }}</th>
                            <th scope="col">{{ __('global.tag') }}</th>
                            <th scope="col">{{ __('global.created_at') }}</th>
                            <th scope="col">{{ __('global.active') }}</th>
                            <th scope="col">{{ __('global.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($layouts as $key => $layout)
                            <tr>
                                <th scope="row">{{  ($layouts->currentpage()-1) * $layouts->perpage() + $key + 1 }}</th>
                                <td wire:click="edit({{ $layout->id }})" class="cursor-pointer text-nowrap">{{ $layout->title ?: "_" }}</td>
                                <td wire:click="edit({{ $layout->id }})" class="cursor-pointer text-nowrap">{{  number_format($layout->count_list) }}</td>
                                <td wire:click="edit({{ $layout->id }})" class="cursor-pointer text-nowrap">{{ \App\Enums\EnumLanguages::trans($layout->lang) }}</td>
                                <td wire:click="edit({{ $layout->id }})" class="cursor-pointer text-nowrap">{{ \App\Enums\EnumLayoutGroupTags::trans($layout->tag) }}</td>
                                <td class="text-nowrap">{{ \Morilog\Jalali\Jalalian::fromDateTime($layout->created_at)->format('Y-m-d') }}</td>
                                <td class="text-nowrap">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" @checked($layout->is_active) wire:click="changeActiveStatus({{ $layout->id }})">
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    <i class="cursor-pointer ti ti-trash text-danger ms-2" data-bs-toggle="tooltip" data-bs-placement="top" onclick="Custom.deleteItemList({{$layout->id}})" title="{{ __('global.delete') }}"></i>
                                    <i class="cursor-pointer ti ti-pencil text-warning ms-2" data-bs-toggle="tooltip" data-bs-placement="top" wire:click="edit({{ $layout->id }})" title="{{ __('global.edit') }}"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $layouts->links("pagination::bootstrap-5") }}
            </div>
        </div>
    </div>
</div>
