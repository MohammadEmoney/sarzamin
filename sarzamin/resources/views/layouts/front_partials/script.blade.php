{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
<script src="{{ asset('/Impact/assets/vendor/jquery/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('/Impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/Impact/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('/Impact/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('/Impact/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('/Impact/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('/Impact/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/Impact/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('/panel/src/assets/libs/sweetalert/sweetalert2.all.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('/Impact/assets/js/main.js') }}"></script>
@if (App::isLocale('en'))
    <script src="{{ asset('/panel/src/assets/js/alert-en.js') }}"></script>
    <script src="{{ asset('/Impact/assets/js/custom-en.js') }}"></script>
@else
    <script src="{{ asset('/panel/src/assets/js/alert.js') }}"></script>
    <script src="{{ asset('/Impact/assets/js/custom.js') }}"></script>
@endif
@stack('scripts')
@livewireScripts