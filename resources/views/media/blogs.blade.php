@extends('master')

@section('title', 'Latest Blogs and Updates')
@section('description', 'Stay up-to-date with the latest news and updates on Kaddah Cleaning through our informative and insightful blogs. Get tips, tricks, and expert advice. ')
@section('content')

<!-- Start of Main -->
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title">
                Latest News and Updates
            </h1>
            <h4 class="page-subtitle">
                Read Our Articles
            </h4>
            <h5 style="color: transparent; position: absolute;">
                Dive into the Kaddah Cleaning blog for fresh perspectives on innovative cleaning methods, product unveilings,
                and evolving industry dynamics. Whether you're tackling a stubborn stain or seeking the best mop for tiled floors, 
                we've got the tips and tricks you need. Stay informed and stay clean with our expert advice.
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
                <li>Blog Posts</li>
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
                    @foreach($blogs as $blog)
                    <div class="post col-lg-4 col-sm-6">
                        <figure class="post-media br-sm">
                            <a href="{{route('blog.show', $blog->slug)}}">
                                <img src="{{asset('storage/'.$blog->image)}}" alt="Post" width="600" height="420"
                                    style="background-color: #AFAFAF;" />
                            </a>
                            <div class="post-calendar">
                                <span class="post-day">{{dateFormat($blog->created_at, 'd')}}</span>
                                <span class="post-month">{{dateFormat($blog->created_at, 'M')}}</span>
                            </div>
                        </figure>
                        <div class="post-details">
                            <h4 class="post-title">
                                <a href="{{route('blog.show', $blog->slug)}}">
                                    {{$blog->title}}
                                </a>
                            </h4>
                            <div class="post-content">
                                <p>
                                    {{$blog->excerpt}}
                                </p>
                            </div>
                            <a href="{{route('blog.show', $blog->slug)}}" class="btn btn-link btn-underline">Read
                                More<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{ $blogs->links() }}
        </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->

@endsection