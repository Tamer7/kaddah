@extends('master')

@section('title', $blog->name)

@section('content')

<!-- Start of Main -->
<main class="main">
  <!-- Start of Page Header -->
  <div class="page-header">
    <div class="container">
      <h1 class="page-title mb-0">{{$blog->title}}</h1>
    </div>
  </div>
  <!-- End of Page Header -->

  <!-- Start of Breadcrumb -->
  <!-- <nav class="breadcrumb-nav">
    <div class="container">
      <ul class="breadcrumb bb-no">
        <li><a href="/">Home</a></li>
        <li><a href="/media/blogs">Blogs</a></li>
        <li>{{$blog->slug}}</li>
      </ul>
    </div>
  </nav> -->
  <be />
  <!-- End of Breadcrumb -->

  <!-- Start of Page Content -->
  <div class="page-content mb-8">
    <div class="container">
      <div class="row gutter-lg">
        <div class="main-content post-single-content">
          <div class="post post-grid post-single">
            <figure class="post-media br-sm">
              <img src="{{asset('storage/'.$blog->image)}}" alt="Blog" width="930" height="500" />
            </figure>
            <div class="post-details">
              <div class="post-meta">
                <a href="#" class="post-date">{{dateFormat($blog->created_at, 'l j F Y')}}</a>
              </div>
              <h2 class="post-title"><a href="#">{{$blog->name}}</a></h2>
              <div class="post-content">
                <p>
                  {{$blog->excerpt}}
                </p>
                
              </div>
            </div>
          </div>
          <blockquote class="text-center mb-8">
            <i class="fas fa-quote-left"></i>
            <p class="font-weight-bold mt-1 mb-2">{{$blog->description}}</p>
          </blockquote>
          
          <!-- End Blockquote -->
          {!! $blog->body !!}
          
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
                @foreach($related as $blog)
                <div class="swiper-slide post post-grid">
                  <figure class="post-media br-sm">
                    <a href="{{route('blog.show', $blog->slug)}}">
                      <img src="{{asset('storage/'.$blog->image)}}" alt="Post" width="296"
                        height="190" style="background-color: #bcbcb4;" />
                    </a>
                  </figure>
                  <div class="post-details text-center">
                    <div class="post-meta">
                       <a href="#" class="post-date">{{dateFormat($blog->created_at, 'd m y')}}</a>
                    </div>
                    <h4 class="post-title mb-3"><a href="{{route('blog.show', $blog->slug)}}">{{$blog->title}}</a></h4>
                    <a href="{{route('blog.show', $blog->slug)}}" class="btn btn-link btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
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
                          @foreach($group as $blog)
                          <div class="post-widget mb-4">
                            <figure class="post-media br-sm">
                              <img src="{{asset('storage/'.$blog->image)}}" alt="150" height="150" />
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