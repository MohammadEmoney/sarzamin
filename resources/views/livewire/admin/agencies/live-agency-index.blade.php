<div class="container-fluid">
    <livewire:admin.components.live-breadcrumb :items="[['title' => $title]]" />
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
                <h5 class="card-title fw-semibold mb-4">{{ $title }}</h5>
                <button class="btn btn-sm btn-info" wire:click="create">{{ __('global.create_agency') }}</button>
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
                                    <div class="bpage col-md-6 px-0 py-2 text-center">
                                        <span>نوع سفارش:</span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.page_type" name="pageType" id="inlineRadio1" value="tuition">
                                            <label class="form-check-label" for="inlineRadio1">نمایش شهریه ها</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.page_type" name="pageType" id="inlineRadio2" value="book">
                                            <label class="form-check-label" for="inlineRadio2">نمایش کتاب ها</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" wire:model.live="filter.page_type" name="pageType" id="inlineRadio3" value="">
                                            <label class="form-check-label" for="inlineRadio3">نمایش همه</label>
                                        </div>
                                    </div>
                                    <div class="bpage col-md-6 p-2 text-center">
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
                                    <div class="bpage col-md-6 px-0 py-2 text-center">
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
                            <th scope="col">{{ __('global.province') }}</th>
                            <th scope="col">{{ __('global.city') }}</th>
                            <th scope="col">{{ __('global.office_code') }}</th>
                            <th scope="col">{{ __('global.office_name') }}</th>
                            <th scope="col">{{ __('global.office_chief') }}</th>
                            <th scope="col">{{ __('global.phone_number') }}</th>
                            <th scope="col">{{ __('global.address') }}</th>
                            <th scope="col">{{ __('global.lang') }}</th>
                            <th scope="col">{{ __('global.created_at') }}</th>
                            <th scope="col">{{ __('global.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agencies as $key => $agency)
                        
                            <tr>
                                <th scope="row">{{  ($agencies->currentpage()-1) * $agencies->perpage() + $key + 1 }}</th>
                                <td wire:click="edit({{ $agency->id }})" class="cursor-pointer text-nowrap">{{ $agency->province ?: "_" }}</td>
                                <td wire:click="edit({{ $agency->id }})" class="cursor-pointer text-nowrap">{{ $agency->city }}</td>
                                <td wire:click="edit({{ $agency->id }})" class="cursor-pointer text-nowrap">{{ $agency->office_code }}</td>
                                <td wire:click="edit({{ $agency->id }})" class="cursor-pointer text-nowrap">{{ $agency->office_name ?: "_" }}</td>
                                <td wire:click="edit({{ $agency->id }})" class="cursor-pointer text-nowrap">{{ $agency->office_chief }}</td>
                                <td wire:click="edit({{ $agency->id }})" class="cursor-pointer text-nowrap" dir="ltr">{{ $agency->phone }}</td>
                                <td wire:click="edit({{ $agency->id }})" class="cursor-pointer text-nowrap">{{ $agency->address }}</td>
                                <td wire:click="edit({{ $agency->id }})" class="cursor-pointer text-nowrap">{{  \App\Enums\EnumLanguages::trans($agency->lang) }}</td>
                                <td class="text-nowrap">{{ \Morilog\Jalali\Jalalian::fromDateTime($agency->created_at)->format('Y-m-d') }}</td>
                                <td class="text-nowrap">
                                    <i class="cursor-pointer ti ti-trash text-danger ms-2" data-bs-toggle="tooltip" data-bs-placement="top" onclick="Custom.deleteItemList({{$agency->id}})" title="حذف"></i>
                                    <i class="cursor-pointer ti ti-pencil text-warning ms-2" data-bs-toggle="tooltip" data-bs-placement="top" wire:click="edit({{ $agency->id }})" title="ویرایش"></i>
                                    {{-- <i class="cursor-pointer ti ti-eye" data-bs-toggle="tooltip" data-bs-placement="top" wire:click="show({{ $agency->id }})" title="نمایش"></i> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $agencies->links("pagination::bootstrap-5") }}
            </div>
        </div>
    </div>
</div>
