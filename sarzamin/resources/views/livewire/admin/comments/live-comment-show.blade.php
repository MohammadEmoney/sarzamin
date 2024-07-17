<div class="container-fluid">
    <livewire:admin.components.live-breadcrumb :items="[['title' => __('global.categories'), 'route' => route('admin.categories.index')], ['title' => $title]]" />
    <div class="card">
        <div class="card-body">
            <h3 class="">{{ $title }}</h3>
            <div>
                <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
                    data-sidebar-position="fixed" data-header-position="fixed">
                    <div class="d-flex align-items-center justify-content-center w-100">
                        <div class="row justify-content-center w-100">
                            <div class="col-md-12">
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex">
                                                    <p class="fw-bolder me-3 mb-1">{{ $comment->user?->full_name ?: "-" }}</p>
                                                    <div>{{ __('admin/enums/EnumCommentStatus.' . $comment->status) }}</div>
                                                </div>
                                                <span class="text-muted font-monospace">{{ $comment->created_at->format('Y-m-d') }}</span>
                                            </div>
                                            <div class="col-md-12">
                                                <p>
                                                    {!! $comment->message !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 mt-3">
                                    <div class="card-body">
                                        <form wire:submit.prevent="submit" autocomplete="off">

                                            <div class="row">     
                                                <div class="col-md-12 mb-3" wire:ignore>
                                                    <label for="description" class="form-label">{{ __('global.comment') }}</label>
                                                    <textarea name="" id="description" class="form-control" cols="30" rows="10" wire:model.live="data.message">{{ $data['message'] ?? "" }}</textarea>
                                                </div>
                                                <div>
                                                    @error('data.description')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="submit"
                                                        class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-0">
                                                        <span class="spinner-border spinner-border-sm"
                                                            wire:loading></span> {{ __('global.reply') }}
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