@if($related->isNotEmpty())
<div class="container mx-auto px-2 lg:px-4 mt-8">
    <h2 class="text-2xl font-bold mb-6">Related Posts</h2>
    <div class="flex flex-wrap -mx-2 lg:-mx-4">
        @foreach($related as $post)
        <div class="w-full sm:w-1/2 md:w-1/3 px-2 lg:px-4 mb-4">
            <a href="{{ route('blog.show', $post->slug) }}" class="h-full">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg flex flex-col justify-between" style="height: auto; min-height: 380px;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full object-cover" style="height: 180px;">

                    <div class="relative bg-neutral-50 p-6 w-full h-48 flex">
                        <!-- Content of the container goes here -->
                        <div class="p-4 flex-grow mt-3">
                            <div class="mb-2 text-gray-600 text-sm">
                                {{ $post->created_at->format('F j, Y') }}
                            </div>
                            <h3 class="font-semibold text-lg leading-tight mb-3">
                                {{ $post->title }}
                            </h3>
                        </div>
                        <!-- Positioned at bottom right corner -->
                        <div class="absolute bottom-0 right-0 p-4 text-right">
                            <span class="hover:text-gray-900 text-blue hover-underline-animation flex items-center">
                                Read More
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </span>
                        </div>
                    </div>

                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endif
