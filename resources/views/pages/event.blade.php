<x-layout :title="$event->name">

    @push('styles')
        <link href="{{ asset('css/blog-styles.css') }}" rel="stylesheet">
        <script src="//unpkg.com/alpinejs@3" defer></script>
    @endpush

    <x-header />

    <x-panel>
        <x-slot name="title">
            {{ $event->title }}
        </x-slot>

        <div class="page-content mb-8">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main event post content -->
                    <div class="lg:col-span-3">
                        <!-- Event Content here -->
                        @include('pages.partials.event-content', [ 'event', $event ])

                        <!-- Images Gallery -->
                        @if($event->images)
                            @include('pages.partials.image-gallery', ['images' => json_decode($event->images)])
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </x-panel>

    <x-footer />

    @push('scripts')

        <script src="{{ asset('js/post-navigation.js') }}"></script>
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                var galleryThumbs = new Swiper('.gallery-thumbs', {
            // Thumbs Swiper options
        });
        var galleryTop = new Swiper('.gallery-top', {
            // Main Swiper options
            thumbs: {
                swiper: galleryThumbs,
            },
        });
            });
        </script>

    @endpush

</x-layout>
