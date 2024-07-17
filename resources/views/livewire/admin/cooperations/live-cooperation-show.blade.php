<div class="container-fluid">
    <livewire:admin.components.live-breadcrumb :items="[['title' => __('global.cooperations'), 'route' => route('admin.cooperations.index')], ['title' => $title]]" />
    <div class="card">
        <div class="card-body">
            <div>
                <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
                    data-sidebar-position="fixed" data-header-position="fixed">
                    <div class="d-flex align-items-center justify-content-center w-100">
                        <div class="row justify-content-center w-100">
                            <div class="col-md-6 m-auto">
                                <div class="card mb-3 mt-3">
                                    <div class="card-head text-center">
                                        <div class="mt-3">
                                            <img src="{{ asset('general/img/avatar_placeholder.png') }}" alt="" class="img-fluid rounded-circle">
                                        </div>
                                        <h3 class="mt-3">{{ $title }}</h3>
                                        <p>{{ $cooperation->job }}</p>
                                        <span class="small">{{ $cooperation->created_at?->diffForHumans() }}</span>
                                    </div>
                                    <div class="card-body text-center">
                                        <div>
                                            {!! $cooperation->description !!}
                                        </div>
                                        <div class="d-flex justify-content-around mt-3">
                                            <a href="tel:{{ $cooperation->phone }}" class="btn btn-info">{{ __('global.call') }}</a>
                                            <button class="btn btn-success" wire:click="download('resume')">{{ __('global.resume') }}</button>
                                            <button class="btn btn-primary" wire:click="download('employmentForm')">{{ __('global.employment_form') }}</button>
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
</div>