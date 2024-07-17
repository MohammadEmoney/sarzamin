<div>
    @include('livewire.front.components.live-breadcrumb', [
        'title' => $title, 
        'items' => [['title' => __('global.home'), 'route' => route('home')], ['title' => $title]],
        'background' => '',
        'subTitle' => '',
    ])
    {{-- <livewire:front.components.live-breadcrumb 
      :title=""
      :items="[['title' => __('global.home'), 'route' => route('home')], ['title' => $title]]" 
    /> --}}


    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <section class="">
                    <div class="container-fluid mb-4">
                        <div class="row">
                            <div class="col-sm-6 text-black">
                                <div class="d-flex justify-content-center">
                                    <div class="mt-2">
                                        <img src="{{ $logo }}" alt="{{ $settings['title'] ?? env('APP_NAME') }}" width="220px">
                                    </div>
                                </div>
                                <div class="h-custom-2 px-5 ms-xl-4 mt-3 pt-5 pt-xl-0 mt-xl-n5">
                                    @include('livewire.dashboard.components.form')
                                    <div class="text-center">{!! __('messages.have_account', ['link' => route('login')]) !!}</div>
                                </div>
                    
                            </div>
                            <div class="col-sm-6 px-0 d-none d-sm-block">
                                <img src="{{ asset('Impact/assets/img/register.jpg') }}"
                                    alt="Register image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@script
<script>
    $wire.on('autoFocus', () => {
        $(document).ready(function () {
            console.log('invalid-input Focus');
            $('.form-control').focus()
        });
    })
</script>
@endscript

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.password-icon').on('click', function() {
                $(this).toggleClass('ti-eye-off').toggleClass('ti-eye'); // toggle our classes for the eye icon
                var type = $(this).siblings("input").attr("type");
                // now test it's value
                if( type === 'password' ){
                    $(this).siblings("input").attr("type", "text");
                }else{
                    $(this).siblings("input").attr("type", "password");
                }
            });
        });
    </script>
@endpush