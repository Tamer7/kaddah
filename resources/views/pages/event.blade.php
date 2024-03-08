<x-layout :title="$event->name">

    @push('styles')
        <link href="{{ asset('css/blog-styles.css') }}" rel="stylesheet">
        <script src="//unpkg.com/alpinejs@3" defer></script>
    @endpush

    <x-panel>
        <x-slot name="title">
            {{ $event->title }}
        </x-slot>

        <div class="page-content mb-8">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main blog post content -->
                    <div class="lg:col-span-2">
                        @include('pages.partials.blog-content', ['blog' => $event])
                    </div>

                    <!-- Sidebar with popular posts -->
                    <div class="sidebar-content lg:col-span-1">
                        @include('pages.partials.sidebar-popular-posts', ['popularPosts' => $related])

                        <!-- Calendar -->
                        @include('pages.partials.calendar')

                    </div>
                </div>

                @if($event->images)
                        @include('pages.partials.image-gallery', ['images' => json_decode($event->images)])
                    @endif

                <div class="lg:col-span-2">
                    <!-- Related Posts -->
                    @includeWhen($related->isNotEmpty(), 'pages.partials.related-posts', ['related' => $related])
                </div>
            </div>
        </div>
    </x-panel>


    @push('scripts')

        <script src="{{ asset('js/post-navigation.js') }}"></script>

    @endpush

</x-layout>