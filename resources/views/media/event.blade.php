@extends('master')

@section('title', $event->name)

@section('content')

<!-- Start of Main -->
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title mb-0">{{$event->title}}</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <!-- <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb bb-no">
                <li><a href="/">Home</a></li>
                <li><a href="/media/events">events</a></li>
                <li>{{$event->slug}}</li>
            </ul>
        </div>
    </nav> -->
    <br />
    <!-- End of Breadcrumb -->

    <!-- Start of Page Content -->
    <div class="page-content mb-8">
        <div class="container">
            <div class="row gutter-lg">
                <div class="main-content post-single-content">
                    <div class="post post-grid post-single">
                        <figure class="post-media br-sm">
                            <img src="{{asset('storage/'.$event->image)}}" alt="event" width="930" height="500" />
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                <a href="#" class="post-date">{{dateFormat($event->created_at, 'l j F Y')}}</a>
                            </div>
                            <h2 class="post-title"><a href="#">{{$event->name}}</a></h2>
                            <div class="post-content">
                                <p>
                                    {{$event->excerpt}}
                                </p>

                            </div>
                        </div>
                    </div>
                    <blockquote class="text-center mb-8">
                        <i class="fas fa-quote-left"></i>
                        <p class="font-weight-bold text-dark mt-1 mb-2">{{$event->description}}</p>
                    </blockquote>

                    <!-- End Blockquote -->
                    {!! $event->body !!}

                    @if($event->images)

                    <h4 class="title title-lg font-weight-bold mt-10 pt-1 mb-5">Images Gallery</h4>
                    <div class="product product-single row">
                        <div class="product-gallery product-gallery-sticky">
                            <div class="swiper-container product-single-swiper swiper-theme nav-inner" data-swiper-options="{
                                'navigation': {
                                    'nextEl': '.swiper-button-next',
                                    'prevEl': '.swiper-button-prev'
                                }
                            }">
                                <div class="swiper-wrapper row cols-1 gutter-no">

                                    @foreach(json_decode($event->images) as $image)
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="{{asset('storage/'.$image)}}"
                                                    data-zoom-image="{{asset('storage/'.$image)}}"
                                                    alt="{{$event->name}}" width="488" height="549">
                                            </figure>
                                        </div>
                                    @endforeach

                                </div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>

                            </div>
                            <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                'navigation': {
                                    'nextEl': '.swiper-button-next',
                                    'prevEl': '.swiper-button-prev'
                                }
                            }">
                                <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                    @foreach(json_decode($event->images) as $image)
                                        <div class="product-thumb swiper-slide">
                                            <img src="{{asset('storage/'.$image)}}"
                                                alt="{{$event->name}} Thumb" width="800" height="900">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>
                            </div>
                        </div>
                    </div>
                    @endif

                    <h4 class="title title-lg font-weight-bold mt-10 pt-1 mb-5">Related Posts</h4>
                    <div class="swiper">
                        <div class="post-slider swiper-container swiper-theme nav-top pb-2" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 1,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 2
                                },
                                '768': {
                                    'slidesPerView': 3
                                },
                                '992': {
                                    'slidesPerView': 2
                                },
                                '1200': {
                                    'slidesPerView': 3
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-xs-2 cols-1">
                                @foreach($related as $event)
                                <div class="swiper-slide post post-grid">
                                    <figure class="post-media br-sm">
                                        <a href="{{route('event.show', $event->slug)}}">
                                            <img src="{{asset('storage/'.$event->image)}}" alt="Post" width="296"
                                                height="190" style="background-color: #bcbcb4;" />
                                        </a>
                                    </figure>
                                    <div class="post-details text-center">
                                        <div class="post-meta">
                                            <a href="#" class="post-date">{{dateFormat($event->created_at, 'd m y')}}</a>
                                        </div>
                                        <h4 class="post-title mb-3"><a href="{{route('event.show', $event->slug)}}">{{$event->title}}</a></h4>
                                        <a href="{{route('event.show', $event->slug)}}" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button class="swiper-button-next"></button>
                            <button class="swiper-button-prev"></button>
                        </div>
                    </div>
                    <!-- End Related Posts -->

                </div>
                <!-- End of Main Content -->
                <aside class="sidebar right-sidebar blog-sidebar sidebar-fixed sticky-sidebar-wrapper">
                    <div class="sidebar-overlay">
                        <a href="#" class="sidebar-close">
                            <i class="close-icon"></i>
                        </a>
                    </div>
                    <a href="#" class="sidebar-toggle">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <div class="sidebar-content">
                        <div class="sticky-sidebar">

                            <div class="widget widget-posts">
                                <h3 class="widget-title bb-no">Popular Posts</h3>
                                <div class="widget-body">
                                    <div class="swiper">
                                        <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1
                                        }">
                                            <div class="swiper-wrapper row cols-1">
                                                @foreach($related->split(2) as $group)
                                                <div class="swiper-slide widget-col">
                                                    @foreach($group as $event)
                                                    <div class="post-widget mb-4">
                                                        <figure class="post-media br-sm">
                                                            <img src="{{asset('storage/'.$event->image)}}" alt="150" height="150" />
                                                        </figure>
                                                        <div class="post-details">
                                                            <div class="post-meta">
                                                                <a href="{{route('event.show', $event->slug)}}" class="post-date">{{dateFormat($event->created_at, 'F j, Y')}}</a>
                                                            </div>
                                                            <h4 class="post-title">
                                                                <a href="{{route('event.show', $event->slug)}}">{{$event->title}}</a>
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
                                <h3 class="widget-title bb-no">Calendar</h3>
                                <div class="widget-body">
                                    <div class="calendar-container" data-calendar-options="{
                                        'dayExcerpt': 1
                                    }"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->

@endsection
