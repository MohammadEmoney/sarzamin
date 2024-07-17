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
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <input type="text" class="form-control btn-info" wire:model.live.debounce.600="search" placeholder="{{ __('global.search') }} ...">
                                </div>
                                <div class="col-lg-12 table-responsive">
                                    <table class="table table-bordered">
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($agencies as $key => $agency)
                                                <tr>
                                                    <th scope="row">{{  ($agencies->currentpage()-1) * $agencies->perpage() + $key + 1 }}</th>
                                                    <td class="cursor-pointer text-nowrap">{{ $agency->province ?: "_" }}</td>
                                                    <td class="cursor-pointer text-nowrap">{{ $agency->city }}</td>
                                                    <td class="cursor-pointer text-nowrap">{{ $agency->office_code }}</td>
                                                    <td class="cursor-pointer text-nowrap">{{ $agency->office_name ?: "_" }}</td>
                                                    <td class="cursor-pointer text-nowrap">{{ $agency->office_chief }}</td>
                                                    <td class="cursor-pointer text-nowrap" dir="ltr"><a href="tel:{{ $agency->phone }}">{{ $agency->phone }}</a></td>
                                                    <td class="cursor-pointer text-nowrap">{{ $agency->address }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="text-center" colspan="8">{{ __('global.no_result') }} <i class="ti ti-alert-triangle"></i></td>
                                                </tr>
                                            @endforelse
                                            
                                        </tbody>
                                    </table>
                                    {{ $agencies->links("pagination::bootstrap-5") }}
                                </div><!-- End Contact Form -->
                            </div>
                        </div>
                    </section>
        
                </div>
            </div>
        </div>
    </section><!-- End Blog Details Section -->
</div>