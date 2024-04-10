<div class="sidebar-content">
    <div class="flex items-center justify-center py-8 px-4">
        <div class="max-w-sm w-full shadow-lg">
            <div class="border-b pb-4 border-gray-400 border-dashed pt-5">
                <h2 class="float-left ml-3 font-semibold">Popular Posts</h2>
                <!-- Pagination Controls -->
                <div class="float-right mr-3">
                    <!-- HTML for navigation buttons with arrow icons -->
                    <button id="prevButton" class="navigation-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextButton" class="navigation-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="clear-both"></div>
                <div class="md:py-4 py-5 md:px-6 px-2 bg-gray-50 rounded-b" id="postContainer">
                    @foreach($popularPosts as $index => $post)
                    <a href="{{ route('event.show', $post->slug) }}">

                    <div class="post-widget mb-4 flex items-center post-item {{ $index >= 3 ? 'hidden' : '' }}">
                            <figure class="post-media" style="max-width: 100px; max-height: 100px;">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="rounded-md object-cover w-full h-full">
                            </figure>
                            <div class="post-details ml-4">
                                <div class="post-meta text-xs text-gray-600 mb-2">{{ dateFormat($post->created_at, 'F j, Y') }}</div>
                                <h4 class="post-title text-xs line-clamp-2">
                                    {{ $post->title }}
                                </h4>
                            </div>
                    </div>
                        </a>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>