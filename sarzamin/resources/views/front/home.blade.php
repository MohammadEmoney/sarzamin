@extends('layouts.front')

@section('content')
    <livewire:front.home.live-hero />
    <livewire:front.home.live-home />
@endsection
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sections = document.querySelectorAll('.home-section');
        const leftImage = document.getElementById('left-image');
        const rightImage = document.getElementById('right-image');

        let blockLeftSmall = "{{ asset('Impact/assets/img/seed/blocks-left-small.png') }}",
            blocRightSmall = "{{ asset('Impact/assets/img/seed/blocks-right-small.png') }}",
            inFrontLaptop = "{{ asset('/Impact/assets/img/seed/inf-ront-of-laptop@5x-1024x1007.png') }}",
            imgage13 = "{{ asset('Impact/assets/img/seed/image13-1.png') }}";

        const images = {
            'about-us': { left: imgage13, right: blockLeftSmall },
            'latest-news': { left: blocRightSmall, right: inFrontLaptop },
            'call-to-action': { left: blockLeftSmall, right: imgage13 },
        };

        const updateImages = (sectionId) => {
            leftImage.style.backgroundImage = `url(${images[sectionId].left})`;
            rightImage.style.backgroundImage = `url(${images[sectionId].right})`;
        };
        const removeImages = () => {
            leftImage.style.backgroundImage = 'none';
            rightImage.style.backgroundImage = 'none';
        };

        const onScroll = () => {
            let currentSection = '';
            sections.forEach(section => {
                const rect = section.getBoundingClientRect();
                if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                    currentSection = section.id;
                }
            });
            if (currentSection) {
                updateImages(currentSection);
            } else {
                removeImages();
            }
        };

        window.addEventListener('scroll', onScroll);
        onScroll(); // Initial call to set images
    });

</script>
@endpush