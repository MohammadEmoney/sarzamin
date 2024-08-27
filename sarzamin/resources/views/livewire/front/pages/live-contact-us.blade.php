<div>
    {{-- <livewire:front.components.live-breadcrumb 
      :title="$title"
      :background="$page->getFirstMediaUrl('background')"
      :subTitle="$page->summary" 
      :items="[['title' => __('global.home'), 'route' => route('home')], ['title' => $title]]" 
      :key="124"
    /> --}}
    @include('livewire.front.components.live-breadcrumb', ['background' => $background, 'subTitle' => '', 'items' => [['title' => __('global.home'), 'route' => route('home')], ['title' => $title]]])

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container">
            <div class="row g-5">
    
                <div class="col-lg-12">
                    <h2 class="title">{{ $setting['title'] ?? $title }}</h2>
                    <p>{!! $setting['description'] ?? "" !!}</p>
                    <section id="contact" class="contact">
                        <div class="content">
                            <div class="row gx-lg-0 gy-4">
                                <div class="col-lg-4">

                                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                                    <div class="info-item d-flex">
                                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                                        <div class="ms-2">
                                            <h4>{{ __('global.location') }}:</h4>
                                            <p>{{ $settings['address'] }}</p>
                                        </div>
                                    </div><!-- End Info Item -->
                        
                                    <div class="info-item d-flex">
                                        <i class="bi bi-envelope flex-shrink-0"></i>
                                        <div class="ms-2">
                                            <h4>{{ __('global.email') }}:</h4>
                                            <p>{{ $settings['email'] ?? "-" }}</p>
                                        </div>
                                    </div><!-- End Info Item -->
                        
                                    <div class="info-item d-flex">
                                        <i class="bi bi-phone flex-shrink-0"></i>
                                        <div class="ms-2">
                                            <h4>{{ __('global.call') }}:</h4>
                                            <p dir="ltr">{{ $settings['phone'] ?? "-" }}</p>
                                        </div>
                                    </div><!-- End Info Item -->
                        
                                    <div class="info-item d-flex">
                                        <i class="bi bi-clock flex-shrink-0"></i>
                                        <div class="ms-2">
                                            <h4>{{ __('global.open_hours') }}:</h4>
                                            <p>{{ __('global.sat') }}-{{ __('global.wed') }}: 9:00 - 19:00</p>
                                        </div>
                                    </div><!-- End Info Item -->
                                    </div>
                        
                                </div>
                                <div class="col-lg-8">
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
                                            <input type="text" wire:model="data.subject" class="form-control" name="subject" id="subject" placeholder="{{ __('global.subject') }}" required>
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