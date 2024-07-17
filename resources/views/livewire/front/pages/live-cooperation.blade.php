<div>
    {{-- <livewire:front.components.live-breadcrumb 
      :title="$title"
      :background="$page->getFirstMediaUrl('background')"
      :subTitle="$page->summary" 
      :items="[['title' => __('global.home'), 'route' => route('home')], ['title' => $title]]" 
      :key="124"
    /> --}}
    @include('livewire.front.components.live-breadcrumb', ['background' => '', 'subTitle' => '', 'items' => [['title' => __('global.home'), 'route' => route('home')], ['title' => $title]]])
    
    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container">
            <div class="row g-5">
    
                <div class="col-lg-12">
        
                    <h2 class="title">{{ $setting['title'] ?? $title }}</h2>
                    <p>{!! $setting['description'] ?? "" !!}</p>
                    <section>
                        <div class="content">
                            <h2>{{ __('global.send_resume') }}</h2>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form wire:submit.prevent="submit" method="post" role="form" class="php-email-form">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" wire:model="data.name" class="form-control" id="name" placeholder="{{ __('global.username') }}" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="text" wire:model="data.phone" class="form-control" name="phone" id="phone" placeholder="{{ __('global.phone_number') }}" style="-moz-appearance: textfield;" required>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" wire:model="data.job" class="form-control" name="job" id="job" placeholder="{{ __('global.desired_job') }}" required>
                                        </div>
                                        <div class="row mt-3">
                                            {{-- <div class="col-md-6 file-upload">
                                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">{{ __('global.upload_resume') }}</button>
                                                
                                                <div class="image-upload-wrap">
                                                    <input class="file-upload-input" type='file' onchange="readURL(this);" />
                                                    <div class="drag-text">
                                                        <h3>{{ __('global.drag_and_drop') }}</h3>
                                                    </div>
                                                </div>
                                                <div class="file-upload-content">
                                                    <img class="file-upload-image" src="#" alt="your image" />
                                                    <div class="image-title-wrap">
                                                        <button type="button" onclick="removeUpload()" class="remove-image">{{ __('global.Remove') }} <span class="image-title">{{ __('global.upload_resume') }}</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 file-upload">
                                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input2').trigger( 'click' )">{{ __('global.employment_form') }}</button>
                                                
                                                <div class="image-upload-wrap">
                                                    <input class="file-upload-input2" type='file' onchange="readURL(this);" />
                                                    <div class="drag-text">
                                                        <h3>{{ __('global.drag_and_drop') }}</h3>
                                                    </div>
                                                </div>
                                                <div class="file-upload-content">
                                                    <img class="file-upload-image2" src="#" alt="your image" />
                                                    <div class="image-title-wrap">
                                                        <button type="button" onclick="removeUpload(2)" class="remove-image">{{ __('global.Remove') }} <span class="image-title">{{ __('global.upload_employment_form') }}</span></button>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-md-6 form-group" x-data="{ fileName: '' }">
                                                <div class="input-group shadow">
                                                    <span class="input-group-text px-3 text-muted"><i class="fas fa-file fa-lg"></i></span>
                                                    <input type="file" x-ref="file" wire:model="data.resume" @change="fileName = $refs.file.files[0].name" class="d-none">
                                                    <input type="text" class="form-control form-control" placeholder="{{ __('global.upload_resume') }}" x-model="fileName">
                                                    <button class="browse btn btn-outline-secondary px-4" type="button" x-on:click.prevent="$refs.file.click()"><i class="fas fa-file"></i> {{ __('global.browse') }}</button>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-md-6 form-group" x-data="{ fileName: '' }">
                                                <div class="input-group shadow">
                                                    <span class="input-group-text px-3 text-muted"><i class="fas fa-file fa-lg"></i></span>
                                                    <input type="file" wire:model="data.employmentForm" x-ref="file" @change="fileName = $refs.file.files[0].name" class="d-none">
                                                    <input type="text" class="form-control form-control" placeholder="{{ __('global.employment_form') }}" x-model="fileName">
                                                    <button class="browse btn btn-outline-secondary px-4" type="button" x-on:click.prevent="$refs.file.click()"><i class="fas fa-file"></i> {{ __('global.browse') }}</button>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-6 form-group">
                                                <input type="file" wire:model="data.resume" name="resume" class="form-control" id="resume" placeholder="{{ __('global.resume') }}" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="file" wire:model="data.employmentForm" class="form-control" name="employmentForm" id="employment_form" placeholder="{{ __('global.employment_form') }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" wire:model="data.description" name="description" rows="7" placeholder="{{ __('global.description') }}"></textarea>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button class="btn btn-success" type="submit">{{ __('global.submit') }}</button>
                                        </div>
                                    </form>
                                </div><!-- End Contact Form -->
                            </div>
                        </div>
                    </section>
        
                </div>
            </div>
        </div>
    </section><!-- End Blog Details Section -->
</div>