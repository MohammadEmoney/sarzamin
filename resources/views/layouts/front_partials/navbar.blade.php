<!-- Navbar start -->
<div class="container-fluid fixed-top px-0">
    <div class="container px-0">
        <div class="topbar">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4">
                    <div class="topbar-info d-flex flex-wrap ms-2">
                        <a href="#" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i>{{ $settings['email'] ?? "Example@gmail.com" }}</a>
                        <a href="#" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i><span dir="ltr">{{ $settings['phone'] ?? "+01234567890" }}</span></a>
                        <i class="ti ti-search navOpenBtn"></i>
                        <i class="ti ti-x navCloseBtn"></i>
                    </div>
                </div>
                <livewire:front.components.live-search-bar />
                <div class="col-md-4">
                    <div class="topbar-icon d-flex align-items-center justify-content-end">
                        <a href="{{ \App\Generators\CustomUrlGenerator::localeRoute('en') }}" class="btn-square text-white me-2 mt-2"><span class="fi fi-gb"></span></a>
                        <a href="{{ \App\Generators\CustomUrlGenerator::localeRoute('ar') }}" class="btn-square text-white me-2 mt-2"><span class="fi fi-sa"></span></a>
                        <a href="{{ \App\Generators\CustomUrlGenerator::localeRoute('fa') }}" class="btn-square text-white me-4 mt-2"><span class="fi fi-ir"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <livewire:front.components.live-main-menu />
    </div>
</div>
<!-- Navbar End -->