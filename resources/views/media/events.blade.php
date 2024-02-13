@extends('master')

@section('title', 'Latest Events')
@section('description', 'Get updated on the latest events happening at Kaddah Cleaning! Stay informed about our upcoming activities, promotions, and special offers.')
@section('content')

<!-- Start of Main -->
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title">PRESS</h1>
            <h5 style="color: transparent; position: absolute;">
                We regularly attend events and expos, 
                so watch this space for news on our next conference or seminar
            </h5>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <!-- <nav class="breadcrumb-nav mb-10 pb-1">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/media">media</a></li>
                <li>Events</li>
            </ul>
        </div>
    </nav> -->
    <br />
    <!-- End of Breadcrumb -->

    <!-- Start of Page Content -->
    <div class="page-content mb-10 pb-2">
        <div class="container">

            <div class="post-section mb-5 mb-lg-5">
                <div class="row">
                    @foreach($events as $event)
                    <div class="post col-lg-4 col-sm-6">
                        <figure class="post-media br-sm">
                            <a href="{{route('event.show', $event->slug)}}">
                                <img src="{{asset('storage/'.$event->image)}}" alt="Post" width="600" height="420"
                                    style="background-color: #AFAFAF;" />
                            </a>
                            <div class="post-calendar">
                                <span class="post-day">{{dateFormat($event->created_at, 'd')}}</span>
                                <span class="post-month">{{dateFormat($event->created_at, 'M')}}</span>
                            </div>
                        </figure>
                        <div class="post-details">
                            <h4 class="post-title">
                                <a href="{{route('event.show', $event->slug)}}">
                                    {{$event->title}}
                                </a>
                            </h4>
                            <div class="post-content">
                                <p>
                                    {{$event->excerpt}}
                                </p>
                            </div>
                            <a href="{{route('event.show', $event->slug)}}" class="btn btn-link btn-dark btn-underline">Read
                                More<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{ $events->links() }}
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->

@endsection