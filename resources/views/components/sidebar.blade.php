<div class="sidebar right-sidebar blog-sidebar">
    <div class="sidebar-overlay">
        <a href="#" class="sidebar-close">
            <i class="close-icon"></i>
        </a>
    </div>
    <a href="#" class="sidebar-toggle">
        <i class="fas fa-chevron-left"></i>
    </a>
    <div class="sidebar-content">
        <div class="widget widget-posts">
            <h3 class="widget-title border-b-0">Popular Posts</h3>
            <div class="widget-body">
                <div class="swiper">
                    <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 1
                    }">
                        <div class="swiper-wrapper grid grid-cols-1 gap-4">
                            @foreach($related->split(2) as $group)
                            <div class="swiper-slide">
                                @foreach($group as $blog)
                                <div class="post-widget mb-4">
                                    <figure class="post-media border rounded-sm">
                                        <img src="{{asset('storage/'.$blog->image)}}" alt="Post" class="w-full h-auto rounded-sm" />
                                    </figure>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            <a href="{{route('blog.show', $blog->slug)}}" class="post-date">{{dateFormat($blog->created_at, 'F j, Y')}}</a>
                                        </div>
                                        <h4 class="post-title">
                                            <a href="{{route('blog.show', $blog->slug)}}">{{$blog->title}}</a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget widget-calendar">
            <h3 class="widget-title border-b-0">Calendar</h3>
            <div class="widget-body">
                <div class="calendar-container" data-calendar-options="{
                    'dayExcerpt': 1
                    }"></div>
            </div>
        </div>
    </div>
</div>
