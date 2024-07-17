<div class="container-fluid">
    <livewire:admin.components.live-breadcrumb :items="[['title' => __('global.agencies'), 'route' => route('admin.agencies.index')], ['title' => $title]]" />
    <div class="card">
        <div class="card-body">
            <h3 class="">{{ $title }}</h3>
            <div>
                <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
                    data-sidebar-position="fixed" data-header-position="fixed">
                    <div class="d-flex align-items-center justify-content-center w-100">
                        <div class="row justify-content-center w-100">
                            <div class="col-md-12">
                                <div class="card mb-3 mt-3">
                                    <div class="card-body">

                                        {{-- @if (count($errors->messages()))
                                            <div class="alert alert-warning" role="alert">
                                                لطفا گزینه های ستاره دار را تکمیل نمایید تا اطلاعات شما ثبت
                                                گردد.
                                            </div>
                                        @endif --}}
                                        <form wire:submit.prevent="submit" autocomplete="off">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleInputtext1" class="form-label">{{ __('global.province') }}
                                                            *</label>
                                                        <input type="text" class="form-control" required
                                                            wire:model.blur="data.province" id="exampleInputtext1"
                                                            aria-describedby="textHelp" placeholder="{{ __('global.province') }}">
                                                        <div>
                                                            @error('data.province')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleInputtext1" class="form-label">{{ __('global.city') }}
                                                            *</label>
                                                        <input type="text" class="form-control" required
                                                            wire:model.live.debounce.800ms="data.city" id="exampleInputtext1"
                                                            aria-describedby="textHelp" placeholder="{{ __('global.city') }}">
                                                        <div>
                                                            @error('data.city')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleInputtext1" class="form-label">{{ __('global.office_code') }}
                                                            *</label>
                                                        <input type="text" class="form-control" required
                                                            wire:model.blur="data.office_code" id="exampleInputtext1"
                                                            aria-describedby="textHelp" placeholder="{{ __('global.office_code') }}">
                                                        <div>
                                                            @error('data.office_code')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleInputtext1" class="form-label">{{ __('global.office_name') }}
                                                            *</label>
                                                        <input type="text" class="form-control" required
                                                            wire:model.live.debounce.800ms="data.office_name" id="exampleInputtext1"
                                                            aria-describedby="textHelp" placeholder="{{ __('global.office_name') }}">
                                                        <div>
                                                            @error('data.office_name')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleInputtext1" class="form-label">{{ __('global.office_chief') }}
                                                            *</label>
                                                        <input type="text" class="form-control" required
                                                            wire:model.live.debounce.800ms="data.office_chief" id="exampleInputtext1"
                                                            aria-describedby="textHelp" placeholder="{{ __('global.office_chief') }}">
                                                        <div>
                                                            @error('data.office_chief')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="phoneInputtext1" class="form-label">{{ __('global.phone_number') }}
                                                            *</label>
                                                        <input type="text" class="form-control" wire:model="data.phone" required
                                                            id="phoneInputtext1" aria-describedby="textHelp" placeholder="09123456789">
                                                        <div>@error('data.phone') {{ $message }} @enderror</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="exampleInputtext1" class="form-label">{{ __('global.lang') }}*</label>
                                                    <select id="langs" class="form-control"
                                                        wire:model.live="data.lang">
                                                        <option value="">{{ __('global.select_item') }}</option>
                                                        @foreach ($langs as $key => $value)
                                                            <option value="{{ $key }}">{{ $value }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">     
                                                <div class="col-md-12 mb-3" wire:ignore>
                                                    <label for="address" class="form-label">{{ __('global.address') }}*</label>
                                                    <textarea name="" id="address" class="form-control" cols="30" rows="10" wire:model.live="data.address" required></textarea>
                                                </div>
                                                <div>
                                                    @error('data.address')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="submit"
                                                        class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-0">
                                                        <span class="spinner-border spinner-border-sm"
                                                            wire:loading></span> {{ __('global.submit') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')

    <script>
        var dir = "{{ App::isLocale('en') ? "ltr" : "rtl" }}";
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .then( editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('data.description', editor.getData());
                })
            } )
            .catch( error => {
                    console.error( error );
            } );
        $(document).ready(function () {

            $(`#register_date`).pDatepicker({
                format: 'YYYY-MM-DD',
                autoClose: true,
                onSelect: function(unix) {
                    var propertyName = $(this).data('property');
                    console.log(propertyName);
                    @this.set(`data.register_date`, new persianDate(unix).format('YYYY-MM-DD'), true);
                }
            });

            $('.select2').select2({
                placeholder: '{{ __('global.select_item') }}',
                dir:  dir,
                containerCssClass: 'select-sm',
                allowClear: !0
            });
        });

        function livewireSelect2(component, event) {
            @this.set(component, $(event).val())
        }

        // function livewireSelect2Multi(component, event) {
        //     var selectedValues = [];
        //     $(event).find('option:selected').each(function () {
        //         selectedValues.push($(this).val());
        //     });
        //     @this.set(component, selectedValues)
        // }
    </script>
@endpush

@script
<script>

    $wire.on('select2Initiation', () => {
        console.log('upper section');
        $(document).ready(function () {
            console.log('hit the spot');
            $('#books').select2({
                placeholder: 'انتخاب کنید',
                dir: 'rtl',
                containerCssClass: 'select-sm',
                allowClear: !0
            });
            $('#tuitions').select2({
                placeholder: 'انتخاب کنید',
                dir: 'rtl',
                containerCssClass: 'select-sm',
                allowClear: !0
            });
        });
    });

    $wire.on('selectInstallments', () => {
        $(document).ready(function () {
            $(`#installment_date`).pDatepicker({
                format: 'YYYY-MM-DD',
                autoClose: true,
                onSelect: function(unix) {
                    @this.set(`data.installment_date`, new persianDate(unix).format('YYYY-MM-DD'), true);
                }
            });

            $(`#date_paid`).pDatepicker({
                format: 'YYYY-MM-DD',
                autoClose: true,
                onSelect: function(unix) {
                    var propertyName = $(this).data('property');
                    console.log(propertyName);
                    @this.set(`installments.date_paid`, new persianDate(unix).format('YYYY-MM-DD'), true);
                }
            });
        });
    })
</script>
@endscript